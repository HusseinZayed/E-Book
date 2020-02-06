<?php

/**
 * Make Book Add
 * Make Book Edit
 * Make Book Remove
 * Make Book Search By Name Or Author Or Date Or Price Or Department
 * Make Book Search By Name And Author
 * Make Search By Author Name
 * Make View By Departments
 * Make View To Distince By To Novels/Departments/Short Story
 * 
 */
session_start();
require_once('DB.php');

$conn = (new DB())->connect();


if (isset($_GET['cat']) and isset($_GET['place'])) {
    $query = "select * from category";
    $result = mysqli_query($conn, $query);
    if ($_GET['place'] == "option") {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<option value='" . $row['cat_id'] . "'>" . $row['cat_name'] . "</option>";
        }
    } elseif ($_GET['place'] == "navbar") {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<li><a href="results.php?cat_id=' . $row['cat_id'] . '">' . $row['cat_name'] . '</a></li>';
        }
    }
} else {
    if (isset($_GET['cat']) and isset($_GET['id'])) {
        $query = "select distinct(cat_id) from category where cat_id=" . $_GET['id'];
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) { } else {
            echo 0;
        }
    }
}


if (isset($_GET['branch'])) {
    $query = "select * from branch where branch_cat_id=" . $_GET['id'];
    $result = mysqli_query($conn, $query);
    if (isset($_GET['place'])) {
        if ($_GET['place'] == 'categories') {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a  class="list-group-item" value="' . $row['branch_id'] . '" style="cursor:pointer;" onclick="getbooks(' . $row['branch_id'] . ');createPagination(' . $row['branch_id'] . ')">' . $row['branch_name'] . '</a>';
            }
        } elseif ($_GET['place'] == 'addnew') {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['branch_id'] . "'>" . $row['branch_name'] . "</option>";
            }
        }
    }
}

if (isset($_GET['book_operation'])) {
    if ($_GET['book_operation'] == 'showbycat') {
        $start = 6 * ($_GET['page'] - 1);
        if (isset($_GET['id'])) {
            if (isset($_GET['branch'])) {
                if ($_GET['branch'] == 'exist') {
                    $query = "select 
    book_id,book_name,book_author_name,book_rate,book_description,book_release_date,book_downloaded_number,book_publish_date,
    book_avatar,book_price,book_size,cat_name,branch_name from book inner join category on book.book_cat_id=category.cat_id 
    inner join branch on branch.branch_id=book.book_branch_id where branch.branch_id=" . $_GET['id'] . " order by book.book_id  limit $start,6";
                }
            } else {
                $query = "select 
    book_id,book_name,book_author_name,book_rate,book_description,book_release_date,book_downloaded_number,book_publish_date,
    book_avatar,book_price,book_size,cat_name,branch_name from book inner join category on book.book_cat_id=category.cat_id 
    inner join branch on branch.branch_id=book.book_branch_id where category.cat_id=" . $_GET['id'] . " order by book.book_id  limit $start,6";
            }

            $result = mysqli_query($conn, $query);
            // print_r(mysqli_error($conn));
            generatecontent($result);

        }
    } else if ($_GET['book_operation'] == 'showrowsnum') {
        $cat_id = $_GET['id'];
        $query = "select count(*) from book where book_cat_id=$cat_id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $rows = mysqli_fetch_assoc($result)['count(*)'];
            $numperpage = 6;
            $tot = ceil($rows / $numperpage);
            echo '<div class="col-xs-12"><div class="text-center">';
            echo '<ul class="pagination">';
            for ($i = 1; $i <= $tot; $i++) {
                echo "<li><a onclick='showbookbycatid($i);'>$i</a></li>";
            }
            echo ' </ul></div></div>';
        }
    }
}

if (isset($_GET['call'])) {
    if ($_GET['call'] == 'pagin') {
        $branch_id = $_GET['branch_id'];
        $query = "select count(*) from book where book_branch_id=$branch_id";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $rows = mysqli_fetch_assoc($result)['count(*)'];
            $numperpage = 6;
            $tot = ceil($rows / $numperpage);
            echo '<div class="col-xs-12"><div class="text-center">';
            echo '<ul class="pagination">';
            for ($i = 1; $i <= $tot; $i++) {
                echo "<li><a onclick='getbooks($branch_id,$i);'>$i</a></li>";
            }
            echo ' </ul></div></div>';
        }
    }
}
if (isset($_POST['book_operation'])) {
    if ($_POST['book_operation'] == 'add') {

        $book_name = trim(strip_tags(htmlspecialchars($_POST['book_name'], ENT_QUOTES)));
        $author_name = trim(strip_tags(htmlspecialchars($_POST['author_name'], ENT_QUOTES)));
        $book_description = trim(strip_tags(htmlspecialchars($_POST['book_description'], ENT_QUOTES)));
        if (isset($_POST['book_price']) and !empty($_POST['book_price'])) {
            $book_price = $_POST['book_price'];
        } else {
            $book_price = 0;
        }
        if ($book_price < 0) {
            $book_price = 0;
        }
        $book_name = mysqli_real_escape_string($conn, $book_name);
        $author_name = mysqli_real_escape_string($conn, $author_name);
        $book_description = mysqli_real_escape_string($conn, $book_description);
        $book_cat_id = $_POST['book_category'];
        if (isset($_POST['book_branch']))
            $book_branch_id = $_POST['book_branch'];
        else {
            $book_branch_id = "";
        }
        $book_released_date = $_POST['book_released_date'];

        if (!isset($book_name) or empty($book_name)) {
            echo '<div class="col-xs-12">
            <div class="alert alert-danger">Required Book Name</div></div>';
            return;
        } elseif (!isset($author_name) or empty($author_name)) {
            echo '<div class="col-xs-12">
            <div class="alert alert-danger">Required Author Name</div></div>';
            return;
        }
        // }elseif(!isset($book_description) or empty($book_description)){
        //     echo '<div class="col-xs-12">
        //     <div class="alert alert-danger">Required Book Name</div></div>';
        //     return;
        // }
        // elseif(!isset($book_price) or empty($book_price)){
        //     echo '<div class="col-xs-12">
        //     <div class="alert alert-danger">Required Book Price</div></div>'.$book_price;
        //     return;
        //}
        elseif (!isset($book_cat_id) or empty($book_cat_id)) {
            echo '<div class="col-xs-12">
            <div class="alert alert-danger">Select Book Category</div></div>';
            return;
        } elseif (!isset($book_branch_id) or empty($book_branch_id)) {
            echo '<div class="col-xs-12">
            <div class="alert alert-danger">Select Book Branch</div></div>';
            return;
        } elseif (!isset($book_released_date) or empty($book_released_date)) {
            echo '<div class="col-xs-12">
            <div class="alert alert-danger">Required Book Released Date</div></div>';
            return;
        }

        $image = 'book_avatar';
        $book = 'book';
        if (isset($_FILES[$image])) {
            if ($_FILES[$image]['size'] > 0) {
                $imgagename = $_FILES[$image]['name'];
                $imagedestination = "../img/uploaded/books/";
                $imagesize = $_FILES[$image]['size'];
                $imageerror = $_FILES[$image]['error'];
                $imagetmp = $_FILES[$image]['tmp_name'];
                $allowed = array('png', 'jpg', 'jpeg', 'gif');
                $img_info = explode('.', $imgagename);
                $extension = end($img_info);
                $extension = strtolower($extension);
                if (in_array($extension, $allowed)) {
                    $newName = uniqid("book") . '.' . $extension;
                    $imagedestination .= $newName;
                    move_uploaded_file($imagetmp, $imagedestination);
                } else {
                    // pleaze upload right img extension
                    echo '<div class="col-xs-12">
                    <div class="alert alert-danger">Required Upload  Good Image</div></div>';
                }
            } else {
                // default img
                $imagedestination = "../img/uploaded/books/defaultbook.png";
            }
        } else {
            $imagedestination = "../img/uploaded/books/defaultbook.png";
        }

        if (isset($_FILES[$book])) {
            if ($_FILES[$book]['size'] > 0) {
                $imgagename = $_FILES[$book]['name'];
                $bookdestination = "../uploadedbooks/";
                $booksize = ($_FILES[$book]['size'] / 1024) / 1024;
                $bookerror = $_FILES[$book]['error'];
                $booktmp = $_FILES[$book]['tmp_name'];
                $allowed = array('pdf');
                $img_info = explode('.', $imgagename);
                $extension = end($img_info);
                $extension = strtolower($extension);
                if (in_array($extension, $allowed)) {
                    $newName = uniqid("pdf") . '.' . $extension;
                    $bookdestination .= $newName;
                    move_uploaded_file($booktmp, $bookdestination);
                } else {
                    echo '<div class="col-xs-12">
                            <div class="alert alert-danger">Please Upload Good Book</div></div>';
                    return;
                }
            } else {
                echo '<div class="col-xs-12">
                            <div class="alert alert-danger">Please Upload Good Book</div></div>';
                return;
            }
        } else {
            echo '<div class="col-xs-12">
                            <div class="alert alert-danger">Please Upload A Book</div></div>';
            return;
        }
        $user = $_SESSION['user_id'];
        $query = "insert into book(book_name,book_author_name,book_description
                        ,book_publisher_id,book_cat_id,book_branch_id,book_release_date
                        ,book_avatar,book_size,book_price,book) Values (
                            '$book_name','$author_name','$book_description',$user,$book_cat_id,
                            $book_branch_id,'$book_released_date','$imagedestination',$booksize,
                            $book_price,'$bookdestination')";
        $result = mysqli_query($conn, $query);
        if ($result) {
            // echo '<div class="col-xs-12">
            //<div class="alert alert-success">Book Inserted Successfully </div></div>';
            // return;

            $query = 'select user_book_uploaded from user where user_id=' . $_SESSION['user_id'];
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $uploadedbooks = $row['user_book_uploaded'];
            $uploadedbooks++;
            $query = "update user set user_book_uploaded=" . $uploadedbooks . " where user_id=" . $_SESSION['user_id'];
            mysqli_query($conn, $query);
            echo 10;
        } else {
            echo '<div class="col-xs-12">
                                <div class="alert alert-danger">Failed To Insert The Book</div></div>';

            return;
        }
    }
}

if (isset($_POST['search_in_category'])) {
    $input = trim(mysqli_real_escape_string($conn, strip_tags(htmlentities($_POST['input']))));
    $query = "select * from book inner join category on book.book_cat_id=category.cat_id inner join branch on branch.branch_id=book.book_branch_id where book_name 
    like '$input' or like '%$input' or like '$input%' or like '%$input%' or book_author_name like '$input' or like '%$input' or like '$input%' or like '%$input%'";
}


function generatecontent($result)
{
    if (mysqli_num_rows($result) > 0)
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['book_price'] == 0) {
                ?>

            <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
            <div class="col-lg-4 col-md-4  col-xs-6">
                <div class="panel panel-primary">
                    <!-- <div class="panel panel-danger"> -->
                    <div class="panel-heading text-center">
                        <em><strong style="font: 7;">Free</strong></em>
                    </div>
                    <div class="panel-body img-responsive b1" style="background-image:url(<?= $row['book_avatar'] ?>)">
                    </div>
                    <div class="panel-footer">
                        <a class="btn btn-success down" href="bookinfo.php?book_id=<?= $row['book_id'] ?>"><i class="fa fa-eye"></i> Review</a>
                        <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id<?= $row['book_id'] ?>"><i class="fa fa-lightbulb-o"></i> Demo</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

            <!-- START MODAL OF DEMO BOOKS  FREE-->

            <div class="modal fade" id="modal-id<?= $row['book_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <i class="fa fa-book" style="color:black;"><strong class="modal-title"> Book Info
                                </strong></i>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-xs-12 img-book img-responsive"></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6"><strong>Title</strong></div>
                                <div class="col-xs-6"><?= $row['book_name'] ?></div>
                                <div class="col-xs-6"><strong>Author</strong></div>
                                <div class="col-xs-6"><?= $row['book_author_name'] ?></div>
                                <div class="col-xs-6"><strong>Published Date</strong></div>
                                <div class="col-xs-6"><?= $row['book_publish_date'] ?></div>
                                <div class="col-xs-6"><strong>Released Date</strong></div>
                                <div class="col-xs-6"><?= $row['book_release_date'] ?></div>
                                <div class="col-xs-6"><strong>Department</strong></div>
                                <div class="col-xs-6"><?= $row['cat_name'] ?></div>
                                <div class="col-xs-6"><strong>Branch</strong></div>
                                <div class="col-xs-6"><?= $row['branch_name'] ?></div>
                                <div class="col-xs-6"><strong>Size</strong></div>
                                <div class="col-xs-6"><?= $row['book_size'] ?> MB</div>
                                <div class="col-xs-6"><strong>Price</strong></div>
                                <div class="col-xs-6"><?= $row['book_price'] ?> $</div>
                                <div class="col-xs-6"><strong>Downloaded</strong></div>
                                <div class="col-xs-6"><?php echo ($row['book_downloaded_number'] == 0) ? 0 : $row['book_downloaded_number'] ?> Times</div>
                                <div class="col-xs-6"><strong>Rate</strong></div>
                                <div class="col-xs-6">
                                    <span>
                                        <?php
                                                    switch ($row['book_downloaded_number']) {
                                                        case 0:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            break;
                                                        case 1:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 2:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 3:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 4:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 5:
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                    }
                                                    ?>
                                    </span>
                                </div>
                                <div class="col-xs-6"><strong>Description</strong></div>
                                <div class="col-xs-6"><?= $row['book_description'] ?></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END MODAL OF DEMO BOOKS-->


        <?php
                } else { ?>
            <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
            <div class="col-lg-4 col-md-4  col-xs-6">
                <div class="panel panel-danger">
                    <div class="panel-heading text-center">
                        <em><strong style="font: 7;"><?= $row['book_price'] ?> $</strong></em>
                    </div>
                    <div class="panel-body img-responsive b1" style="background-image:url(<?= $row['book_avatar'] ?>)">
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download<?= $row['book_id'] ?>'>BUY NOW
                            !</button>
                        <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1<?= $row['book_id'] ?>"><i class="fa fa-lightbulb-o"></i> Demo</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

            <!-- START MODAL OF DEMO BOOKS NOT FREE-->
            <div class="modal fade" id="modal-id1<?= $row['book_id'] ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <i class="fa fa-book" style="color:black;"><strong class="modal-title"> Book Info
                                </strong></i>
                        </div>
                        <div class="modal-body">
                            <div class="row ">
                                <div class="col-xs-12  img-book img-responsive "></div>
                            </div>
                            <div class="row">
                            <div class="col-xs-6"><strong>Title</strong></div>
                                <div class="col-xs-6"><?= $row['book_name'] ?></div>
                                <div class="col-xs-6"><strong>Author</strong></div>
                                <div class="col-xs-6"><?= $row['book_author_name'] ?></div>
                                <div class="col-xs-6"><strong>Published Date</strong></div>
                                <div class="col-xs-6"><?= $row['book_publish_date'] ?></div>
                                <div class="col-xs-6"><strong>Released Date</strong></div>
                                <div class="col-xs-6"><?= $row['book_release_date'] ?></div>
                                <div class="col-xs-6"><strong>Department</strong></div>
                                <div class="col-xs-6"><?= $row['cat_name'] ?></div>
                                <div class="col-xs-6"><strong>Branch</strong></div>
                                <div class="col-xs-6"><?= $row['branch_name'] ?></div>
                                <div class="col-xs-6"><strong>Size</strong></div>
                                <div class="col-xs-6"><?= $row['book_size'] ?> MB</div>
                                <div class="col-xs-6"><strong>Price</strong></div>
                                <div class="col-xs-6"><?= $row['book_price'] ?> $</div>
                                <div class="col-xs-6"><strong>Downloaded</strong></div>
                                <div class="col-xs-6"><?php echo ($row['book_downloaded_number'] == 0) ? 0 : $row['book_downloaded_number'] ?> Times</div>
                                <div class="col-xs-6"><strong>Rate</strong></div>
                                <div class="col-xs-6">
                                    <span>
                                        <?php
                                                    switch ($row['book_downloaded_number']) {
                                                        case 0:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            break;
                                                        case 1:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 2:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 3:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 4:
                                                            echo '<i class="fa fa-star-o" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                        case 5:
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            echo '<i class="fa fa-star" style="color:tomato"></i>';
                                                            break;
                                                    }?>
                                    </span>
                                </div>
                                <div class="col-xs-6"><strong>Description</strong></div>
                                <div class="col-xs-6"><?= $row['book_description'] ?></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL OF DEMO BOOKS-->
            <!-- START MODAL OF BUY BOOKS-->
            <section class="modal-buy-book">
                <div class="modal fade" id="modal-id-download<?= $row['book_id'] ?>">
                    <div class="modal-dialog">
                        <div class="modal-content text-center">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><b>UNDER DEVELOPMENT</b></h4>
                            </div>
                            <div class="modal-body ">
                                <div class="alert alert-warning">
                                    <b>
                                        <h3> <i class="fa fa-book" style="color: black;"> </i> BOOK NOT AVAILABLE NOW ..
                                        </h3>
                                    </b>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END MODAL OF BUY BOOKS-->
        <?php
                }
            } else { ?>
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <!-- <div class="panel panel-danger"> -->
                <div class="panel-heading text-center">
                    <em><strong style="font: 7;">No Books Found</strong></em>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        </div>
<?php
    }
}
