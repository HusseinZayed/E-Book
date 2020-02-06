<?php
session_start();
$page_name = "My Profile";
$index = 3;
require_once('header.php');
require_once('navbar.php');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sx-12 text-right">
            <div class="row text-center statistics">
                <div class="col-sm-5 col-xs-12 dash-panel">
                    <h3><i class="fa fa-upload"></i> UPLOAD</h3>
                    <h4>110</h4>
                </div>
                <div class="col-sm-5 col-xs-12 dash-panel">
                    <h3><i class="fa fa-download"></i> Personal DOWNLOAD</h3>
                    <h4>110</h4>
                </div>
                <div class="col-sm-5 col-xs-12 dash-panel">
                    <h3><i class="fa fa-star"></i> My Rate (2/5)</h3>
                    <h4 class="fa fa-star" style="color:yellow;"></h4>
                    <h4 class="fa fa-star" style="color:yellow;"></h4>
                    <h4 class="fa fa-star"></h4>
                    <h4 class="fa fa-star"></h4>
                    <h4 class="fa fa-star"></h4>
                </div>
                <div class="col-sm-5 col-xs-12 dash-panel">
                    <h3><i class="fa fa-download"></i> Books Downloaded</h3>
                    <h4>110</h4>
                </div>
                <!-- <div class="col-xs-12 dash-panel-user">
                    <h3><i class="fa fa-download"></i> Books Downloaded</h3>
                    <h4>110</h4>
                </div> -->
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sx-12 text-capitalize user-info">
            <div class="col-xs-12 text-center">
                <img src=" <?php echo $_SESSION['user_avatar'] ?>" class="img-circle img-avatar">
            </div>
            <div class="col-sm-6 col-xs-12">
                Name:
            </div>
            <div class="col-sm-6 col-xs-12">
                <?php echo $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'] ?>
            </div>
            <div class="col-sm-6 col-xs-12">
                Email :
            </div>
            <div class="col-sm-6 col-xs-12">
                <?php echo $_SESSION['user_email'] ?>
            </div>
            <div class="col-sm-6 col-xs-12">
                Phone:
            </div>
            <div class="col-sm-6 col-xs-12">
                <?php echo $_SESSION['user_phone'] ?>
            </div>
            <div class="col-sm-6 col-xs-12">
                Location :
            </div>
            <div class="col-sm-6 col-xs-12">
                <?php echo $_SESSION['user_location'] ?>
            </div>
            <?php
            if ($_SESSION['user_role'] == 'admin' or $_SESSION['user_role'] == 'publisher') {
                echo '
                <div class="col-sm-6 col-xs-12">
                Role :
            </div>
            <div class="col-sm-6 col-xs-12">
           ' . $_SESSION['user_role'] . '
            </div>
                ';
            }
            ?>
            <div class="col-sm-6 col-xs-12">
                Status :
            </div>
            <div class="col-sm-6 col-xs-12">
                <?php echo $_SESSION['user_status']; ?> <i class="fa fa-circle" style="color:green;"></i>
            </div>
            <div class="col-sm-6 col-xs-12">
                <br>
                <a class="btn btn-success" href="updateprofile.php"><i class="fa fa-edit"></i> Edit Profile Account</a>
            </div>
            <div class="col-sm-6 col-xs-12">
                <br>
                <button class="btn btn-danger" data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i> Add New Book</button>
            </div>

        </div>
    </div>

    <div class="panel panel-default control-panel">
        <div class="panel-body">
            Control Panel
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Published Date</th>
                <th>Author</th>
                <th>Controlers</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
                <td class="controlers">
                    <a href="#" title="edit"><i class="fa fa-edit"></i></a>
                    <a href="#" title="remove"><i class="fa fa-trash"></i></a>
                    <a href="#" title="view"><i class="fa fa-eye"></i></a>
                </td>
            </tr>

        </tbody>
    </table>

    <div class="panel panel-default control-panel">
        <div class="panel-body">
            Downloaded Books Details
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Downloaded / Action Date</th>
                <th>Downloaded</th>
                <th>Action</th>
                <th>Veiw</th>
            </tr>
        </thead>
        <tbody class="downloaded-books-table">
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td class=""><i class="fa fa-times-circle color-error"></i></td>
                <td class=""><i class="fa fa-check-circle"></i></td>
                <td><i class="fa fa-eye"></i></td>
            </tr>

        </tbody>
    </table>



</div>


<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-book gray"></i> New Book</h4>
            </div>
            <div class="modal-body">


                <form  class="form-horizontal" id="form_new_book" role="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <div id="addresult"></div>
                        <div class="col-sm-3">
                            <label class="form-control-static">Book Name</label>
                        </div>
                        <div class="col-sm-6">
                            <input type=text class="form-control" name="book_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Author Name</label>
                        </div>
                        <div class="col-sm-6">
                            <input type=text class="form-control" name="author_name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Book Description</label>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="form-control" rows="2" name="book_description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Book Category</label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" name="book_category" id="fetch_categories">
                                <select>
                        </div>
                        <span id="temp">
                            <div class="col-sm-2">
                                <label class="form-control-static">Branch <i class="fa fa-chevron-right gray"></i> </label>
                            </div>
                            <div class="col-sm-4">
                                <select class="form-control" name="book_branch" id="fetch_branches">

                                    <select>
                            </div>
                        </span>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Released Date</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" name="book_released_date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Book Price</label>
                        </div>
                        <div class="col-sm-3 form-control-static">
                            free <input type="radio" name="price" value="0">
                            Paid <input type="radio" name="price" value="1">
                        </div>
                        <span id="temp2">
                        <div class="col-sm-2">
                            <label class="form-control-static">Price <i class="fa fa-chevron-right" style="color:#333;"></i> </label>
                        </div>
                        <div class="col-sm-4">
                            <input type="number" min=1 class="form-control" name="book_price">
                        </div>
                        </span>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Book Avatar</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="book_avatar">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-3">
                            <label class="form-control-static">Book </label>
                        </div>
                        <div class="col-sm-6">
                            <input type="file" class="form-control" name="book">
                        </div>
                    </div>
                </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn-add" name="add_new_book" class="btn btn-danger" onclick="addbook();">Add</button>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
