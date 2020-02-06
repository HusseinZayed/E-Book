<?php
session_start();
$page_name = "Book Details";
$index = 5;


require_once('header.php');
require_once('navbar.php');
if (isset($_GET['book_id'])) {
    ?>

    <script type="text/javascript">
        var id = <?php echo $_GET['book_id']; ?>;
        $.ajax({
            url: "classes/helper.php",
            method: "GET",
            data: {
                job: "check_book_exist",
                book_id: id
            },
            success: function(e) {
                if (e == 0) {

                    document.location.href = "404.php"
                } else {}



            }

        });
    </script>
<?php
} else {
    echo '<script>document.location.href="404.php"</script>';
}
?>


<div class="container">
    <div class="row">
        <div class="col-md-3">

            <br>
            <script type="text/javascript">
                    var id = <?php echo $_GET['book_id']; ?>;
                    $.ajax({
                        url: "classes/helper.php",
                        method: "GET",
                        data: {
                            job: "getrelatedbooks",
                            book_id: id
                        },
                        success: function(e) {
                          //  alert(e);
                          $('#relatedbooks').html(e);
                        }

                    });
                </script>
                <p class="panel panel-heading panel-danger">Related Books</p>
                <div class="row text-center" id="relatedbooks">

                </div>
        </div>
      
        <script type="text/javascript">
        var bookinfo="";
                    var id = <?php echo $_GET['book_id']; ?>;
                    $.ajax({
                        url: "classes/helper.php",
                        method: "GET",
                        data: {
                            job: "getbookinfo",
                            book_id: id
                        },
                        success: function(e) {
                            bookinfo=JSON.parse(e);
                          $('#book_name').html(bookinfo.book_name);
                          $('#book_avatar').attr('src',bookinfo.book_avatar);
                          $('#book_published_date').html(bookinfo.book_publish_date);
                          $('#book_author_name').html(bookinfo.book_author_name);
                          $('#book_name').html(bookinfo.book_name);
                          $('#downloaded-number').html((bookinfo.book_downloaded_number>0)?bookinfo.book_downloaded_number+" ":0+" ");
                          $('#comments-number').html((bookinfo.book_comment_number>0)?bookinfo.book_comment_number+" ":0+" ");
                          $('#likes-number').html((bookinfo.book_like_number>0)?bookinfo.book_like_number+" ":0+" ");
                          $('#dislikes-number').html((bookinfo.book_dislike_number>0)?bookinfo.book_dislike_number+" ":0+" " );
                          $('#bookname').html(bookinfo.book_name);
                          $('#authorname').html(bookinfo.book_author_name);
                          $('#price').html((bookinfo.book_name>0)?bookinfo.book_name:"Free");
                          $('#size').html(bookinfo.book_size+" MB");
                          $('#publishdate').html(bookinfo.book_publish_date);
                          $('#category').html(bookinfo.cat_name);
                          $('#branch').html(bookinfo.branch_name);
                          $('#download').html((bookinfo.book_downloaded_number>0)?bookinfo.book_downloaded_number+" Times":0+" Times");
                          $('#description').html(bookinfo.book_description);
                          $('#down-btn').attr('value',bookinfo.book_id);
                          $('#down-btn').attr('download',bookinfo.book);
                          $('#down-btn').attr('href',bookinfo.book);
                          var d="";
                          for(i=0;i<Number(bookinfo.book_rate);i++){
                              d=document.createElement('i');
                              d.setAttribute('class',"fa fa-star");
                              d.setAttribute('style',"color:tomato");
                              document.getElementById('rate').appendChild(d);
                          }
                          d="";
                          for(i=0;i<5-Number(bookinfo.book_rate);i++){
                              d=document.createElement('i');
                              d.setAttribute('class',"fa fa-star-o");
                              d.setAttribute('style',"color:tomato");
                              document.getElementById('rate').appendChild(d);
                          }

                        }

                    });
                </script>     
        <div class="col-lg-9">
            <h1 class="mt-4" id="book_name"></h1>
            <p class="lead" id="book_author_name">
                by Author Name
            </p>
            <hr>
            <p id="book_published_date"></p>
            <hr>
            <div class=" row text-center">
                <img class="img-responsive" src="" style="max-width:25%;display:inline;" id="book_avatar">
            </div>
            <br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 opinion">
                            <span class="lead">Book statistics</span>
                        </div>
                        <div class="col-xs-6 text-right">
                            <span><span class="downloaded-number" id="downloaded-number">3 </span><i class="fa fa-download gray download"></i></span>
                            <span><span class="comments-number" id="comments-number"> </span><i class="fa fa-comment gray comment"></i></span>
                            <span><span class="likes-number" id="likes-number"> </span><i class="fa fa-thumbs-o-up gray like-set"></i></span>
                            <span><span class="dislikes-number" id="dislikes-number"> </span><i class="fa fa-thumbs-o-down gray dislike"></i></span>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="lead">book description !</p>
            <div class="row">
                <div class="col-xs-6"><strong>Title</strong></div>
                <div class="col-xs-6" id="bookname"></div>
                <div class="col-xs-6"><strong>Author</strong></div>
                <div class="col-xs-6" id="authorname"></div>
                <div class="col-xs-6"><strong>Published Date</strong></div>
                <div class="col-xs-6" id="publishdate"></div>
                <div class="col-xs-6"><strong>Department</strong></div>
                <div class="col-xs-6" id="category"></div>
                <div class="col-xs-6"><strong>Branch</strong></div>
                <div class="col-xs-6" id="branch"></div>
                <div class="col-xs-6"><strong>Size</strong></div>
                <div class="col-xs-6" id="size"></div>
                <div class="col-xs-6"><strong>Price</strong></div>
                <div class="col-xs-6" id="price"></div>
                <div class="col-xs-6" ><strong>Downloaded</strong></div>
                <div class="col-xs-6"id="download"></div>
                <div class="col-xs-6"><strong>Rate</strong></div>
                <div class="col-xs-6">
                    <span id="rate">
                        
                    </span>
                </div>
                <div class="col-xs-6"><strong>Description</strong></div>
                <div class="col-xs-6" id="description"></div>
            </div>
            <hr>
            <div class="row text-center">
                <a class="btn btn-success"  id="down-btn">Download <i class="fa fa-download"></i></a>
                <script type="text/javascript">
                
                   var user_id=<?php echo (isset($_SESSION['user_id']))?$_SESSION['user_id']:0?>;
                $('#down-btn').on('click',function(){
                    $.ajax({
                        url: "classes/helper.php",
                        method: "GET",
                        data: {
                            job: "download",
                            book_id:$('#down-btn').attr('value'),
                            user_id:user_id

                        },
                        success:function(e){
alert(e)
                        }
                    });
                });

                </script>
          
            </div>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading action-header">
                    <i class="fa fa-comment gray"></i> Leave A Comment:
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">comment</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2">
                    <img class="img-circle" src="http://placehold.it/50x50" alt="">
                </div>
                <div class="col-xs-8">
                    <b class="comment-user-name"><span>User comment name</span></b>
                    <small>
                        <p class="comment-time">commented on 2019/07/11 10:54 pm by admin</p><small>
                            <b>
                                <p class="comment-body">Comment is here here here here here here
                            </b>
                </div>
            </div>
            <a class="nav-link show-more-comments" href="#"><i class="fa fa-compress gray"> More</i></a>
            <br>
            <hr>
            <div class="panel panel-default">
                <div class="panel-heading action-header">
                    <i class="fa fa-star gray"></i> <span>Leave A Rate:</span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 ">
                            <i class="fa fa-star rate"></i>
                            <i class="fa fa-star rate"></i>
                            <i class="fa fa-star rate"></i>
                            <i class="fa fa-star-o rate"></i>
                            <i class="fa fa-star-o rate"></i>
                        </div>
                        <div class="col-xs-6 text-right rate-value">
                            <span> Your Rate Is 0 / 5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once('footer.php');
?>