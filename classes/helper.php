<?php
require_once('DB.php');

$conn = (new DB())->connect();

if (isset($_GET['job'])) {
    if ($_GET['job'] == 'check_book_exist') {
        check_book_exist($_GET['book_id']);
    } elseif ($_GET['job'] == 'getrelatedbooks') {
        getrelatedbooks($_GET['book_id']);
    } elseif ($_GET['job'] == 'getbookinfo') {
        getbookinfo($_GET['book_id']);
    }elseif($_GET['job'] == 'downloadbook'){
        downloadbook($_GET['book_id'],$_GET['book']);
    }elseif($_GET['job'] == 'download'){
        download($_GET['book_id'],$_GET['user_id']);
    }
}



function check_book_exist($book_id)
{
    global $conn;
    $query = "select * from book where book_id=$book_id";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        // exist
        echo 1;
    } else {
        // not exist
        echo 0;
    }
}
function getrelatedbooks($book_id)
{
    global $conn;
    $query = "select book_name,book_id,book_avatar from book where book_branch_id=(select book_branch_id from book where book_id=$book_id) order by book_id desc limit 10";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-xs-6">
            <img src="<?= $row['book_avatar'] ?>" width="80%" height="110px">
            <a href="bookinfo.php?book_id=<?= $row['book_id'] ?>">
                <p><?= $row['book_name'] ?></p>
            </a>
        </div>
<?php
    }
}
function getbookinfo($book_id)
{
    global $conn;
    $query = "select * from book inner join category on book.book_cat_id=category.cat_id 
    inner join branch on branch.branch_id=book.book_branch_id where book.book_id=$book_id";
    $result=mysqli_query($conn,$query);
    echo json_encode(mysqli_fetch_assoc($result));
}
function downloadbook($book_id,$book){

    header('Cache-Control:public');
    header('Content-Description:File Tranfer');
    header("Content-Disposition:attachment;filename=$book");
    header('Content-Type:application/pdf');
    header('Cache-Transfer-Emcoding:binary');
    readfile($book);
    exit;
}
function download($book_id,$user_id){
    global $conn;
    $query="select book_downloaded_number from book where book_id=$book_id";
    $result=mysqli_query($conn,$query);
    $number=mysqli_fetch_assoc($result);
    $number=$number['book_downloaded_number']+1;
    $query="update book set book_downloaded_number=$number where book_id=$book_id";
    $result=mysqli_query($conn,$query);
    if($result){
        $query="insert into download (book_id,user_id) values($book_id,$user_id)";
        $result=mysqli_query($conn,$query);
    }
}