<?php
require_once('header.php');
require_once('navbar.php');

?>
<!-- END NAVBAR -->
<!-- END HEADER -->
<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-xs-3 ">

            <h2 class="my-4  mono text-danger">Short Story</h2>
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

        <div class="col-xs-9">


            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="3" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Book Name1 .</h1>
                                <p>Short Description About The Book</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Book Name2 .</h1>
                                <p>Short Description About The Book</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Book Name3 .</h1>
                                <p>Short Description About The Book</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Book Name4 .</h1>
                                <p>Short Description About The Book</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>

            <div class="row mt">

                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4  col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4  col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4 col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4  col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-4 col-md-4  col-xs-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY
                                NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->

                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->


<!-- START MODAL OF BUY BOOKS-->
<section class="modal-buy-book">
    <div class="modal fade" id="modal-id-download">
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

<!-- START MODAL OF DEMO BOOKS NOT FREE-->
<section class="modal-demo-buy-book">
    <div class="container">
        <div class="modal fade" id="modal-id1">
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
                            <div class="col-xs-6">7 $</div>
                            <div class="col-xs-6"><strong>Downloaded</strong></div>
                            <div class="col-xs-6">1015 Times</div>
                            <div class="col-xs-6"><strong>Rate</strong></div>
                            <div class="col-xs-6">
                                <span>
                                    <i class="fa fa-star" style="color:tomato"></i>
                                    <i class="fa fa-star" style="color:tomato"></i>
                                    <i class="fa fa-star" style="color:tomato"></i>
                                    <i class="fa fa-star" style="color:tomato"></i>
                                    <i class="fa fa-star" style="color:tomato"></i>
                                </span>
                            </div>
                            <div class="col-xs-6"><strong>Description</strong></div>
                            <div class="col-xs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Blandit</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END MODAL OF DEMO BOOKS-->

<!-- START MODAL OF DEMO BOOKS  FREE-->
<section class="modal-demo-free-book">
    <div class="container">
        <div class="modal fade" id="modal-id2">
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
                                    <i class="fa fa-star" style="color:tomato"></i>
                                </span>
                            </div>
                            <div class="col-xs-6"><strong>Description</strong></div>
                            <div class="col-xs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Blandit</div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END MODAL OF DEMO BOOKS-->
<?php
require_once('footer.php');
?>