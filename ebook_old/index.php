<?php
require_once('header.php');
require_once('navbar.php');
?>
    <!-- START SEARCH FORM -->

    <div class="container" id="searchhere">
        <div class="row">
            <div class="col-xs-12">

                <form action="" method="POST" class="form-horizontal" role="form">
                    <div class="form-group">
                        <legend class="text-center">Search Here</legend>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <input   type="text" class="form-control" placeholder="Enter The Book Or Author">
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <div class="col-sm-4">
                                    <select class="form-control">
                                        <option selected>select Department</option>
                                        <option>Dep1</option>
                                        <option>Dep2</option>
                                        <option>Dep3</option>
                                    </select>
                                </div>
                                <div class="col-sm-4">
                                    <input type="date" class="form-control"
                                        title="Select All Book From Now To This Date">
                                </div>
                                <div class="col-sm-4 price">
                                    <label>Free </label> <input type="checkbox" name="book_price">
                                    <label>Cache </label> <input type="checkbox" name="book_price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <button type="submit" class="btn btn-danger" id="search">
                                <i class="fa fa-search"></i> Submit</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <legend class="text-center"></legend>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- END SEARCH FORM -->
    <!-- START ANNOUNCE MENT REGION -->
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">

                <div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h1> <strong>Title!</strong> Alert body ... data come from admin panel</h1>
                </div>

            </div>
        </div>
    </div>
    <!-- END ANNOUNCE MENT REGION -->

    <!-- START THE MOST DOWNLOADED SECTION -->

    <section class="most_downloaded">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-danger text-center">
                        <div class="panel-body back">
                            <strong>
                                <h1>The Popular Books</h1>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Not Free Book-->
            <div class="row">
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->

                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->




            </div>
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
    </section>
    <!-- END THE MOST DOWNLOADED SECTION -->


    <!-- START THE SECTION OF DEPARTMENTS BOOKS -->

    <!-- FIRST DEP -->
    <section class="dep1">
        <div class="container">
            <div class="panel panel-danger ">
                <div class="panel-body">
                    <a href="#" style="font-weight: bold;">Home</a>
                    <i>/</i>
                    <a href="#" style="font-weight: bold;"> Politics</a>
                </div>
            </div>
            <div class="row">
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE NOT FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">7 $</strong></em>
                        </div>
                        <div class="panel-body img-responsive b1 wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-danger down" data-toggle="modal" href='#modal-id-download'>BUY NOW
                                !</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id1"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE NOT FREE BOOK TO HERE-->
                <!--DATA FOLLOW THE  FREE BOOK FROM HERE-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <em><strong style="font: 7;">Free</strong></em>
                        </div>
                        <div class="panel-body img-responsive free wow fadeInLeft">
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success down"><i class="fa fa-eye"></i> Review</button>
                            <button class="btn btn-primary demo " data-toggle="modal" href="#modal-id2"><i
                                    class="fa fa-lightbulb-o"></i> Demo</button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--DATA FOLLOW THE  FREE BOOK TO HERE-->

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
        </div>
    </section>


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