<?php
require_once('header.php');
require_once('navbar.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-4">

            <form action="" method="POST" role="form">
                <legend>Search Here</legend>

                <div class="input-group">
                    <input type="text" class="form-control" id="" placeholder="Book Or Author Name">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-search"></i></button>
                    </span>

                </div>
            </form>
            <br>
            <div class="list-group">
                <i class="list-group-item">Categories</i>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
                <a href="#" class="list-group-item">Category 1</a>
                <a href="#" class="list-group-item">Category 2</a>
                <a href="#" class="list-group-item">Category 3</a>
            </div>

        </div>
        <div class="col-lg-8">
            <h1 class="mt-4">Book Name</h1>
            <p class="lead">
                by <a href="#">Author Name</a>
            </p>
            <hr>
            <p>Posted on January 1, 2019 at 12:00 PM</p>
            <hr>
            <img class="img-responsive rounded" src="http://placehold.it/900x400" alt="">
            <br>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 opinion">
                            <span class="lead">Book statistics</span>
                        </div>
                        <div class="col-xs-6 text-right">
                            <span><span class="downloaded-number">101 </span><i class="fa fa-download gray download"></i></span>
                            <span><span class="comments-number">101 </span><i class="fa fa-comment gray comment"></i></span>
                            <span><span class="likes-number">10 </span><i class="fa fa-thumbs-o-up gray like-set"></i></span>
                            <span><span class="dislikes-number">5 </span><i class="fa fa-thumbs-o-down gray dislike"></i></span>

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="lead">book description !</p>
            <div class="row">
                <div class="col-xs-6"><strong>Title</strong></div>
                <div class="col-xs-6">PHP OOP</div>
                <div class="col-xs-6"><strong>Author</strong></div>
                <div class="col-xs-6">Hatem Mohamed Elsheref</div>
                <div class="col-xs-6"><strong>Published Date</strong></div>
                <div class="col-xs-6">10-2-2018</div>
                <div class="col-xs-6"><strong>Department</strong></div>
                <div class="col-xs-6">Educational</div>
                <div class="col-xs-6"><strong>Type</strong></div>
                <div class="col-xs-6">Book</div>
                <div class="col-xs-6"><strong>Size</strong></div>
                <div class="col-xs-6">7.0 MB</div>
                <div class="col-xs-6"><strong>Price</strong></div>
                <div class="col-xs-6">Free</div>
                <div class="col-xs-6"><strong>Downloaded</strong></div>
                <div class="col-xs-6">1015 Times</div>
                <div class="col-xs-6"><strong>Rate</strong></div>
                <div class="col-xs-6">
                    <span>
                        <i class="fa fa-star" style="color:tomato"></i>
                        <i class="fa fa-star" style="color:tomato"></i>
                        <i class="fa fa-star" style="color:tomato"></i>
                        <i class="fa fa-star" style="color:tomato"></i>
                        <i class="fa fa-star-half-o" style="color:tomato"></i>
                    </span>
                </div>
                <div class="col-xs-6"><strong>Description</strong></div>
                <div class="col-xs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Blandit</div>
            </div>
            <hr>
            <div class="row text-center">
            <button class="btn btn-success">Download <i class="fa fa-download"></i></button>
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