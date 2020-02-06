<?php
session_start();
$page_name="About Us";
$index=6;
require_once('header.php');
require_once('navbar.php');

?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 vission">-Our Vission-</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p class="lead vission-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                vel non aut debitis eveniet saepe recusandae, quo ipsum voluptatibus.
                Ducimus reprehenderit asperiores illum perspiciatis nisi facilis officia
                modi, consequatur rerum.
            </p>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-xs-12 mission">-Our Mission-</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p class="lead mission-content">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                vel non aut debitis eveniet saepe recusandae, quo ipsum voluptatibus.
                Ducimus reprehenderit asperiores illum perspiciatis nisi facilis officia
                modi, consequatur rerum.
            </p>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-xs-12 resources">
            -Resources-
        </div>
        <div class="row text-center">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client1.jpg">
                <h3 class="text-bold">Resource number Four</h3>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client1.jpg">
                <h3 class="text-bold">Resource number Four</h3>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client1.jpg">
                <h3 class="text-bold">Resource number Four</h3>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client1.jpg">
                <h3 class="text-bold">Resource number Four</h3>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-xs-12 team">
            -Team-
        </div>
        <div class="row text-center">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3">
                <img class="img-circle img-source" src="img/client2.jpg">
                <h3 class="text-bold">Sara</h3>
                <p class="text-small text-capitalize">short description job</p>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row text-center">
        <div class="col-xs-6 col-sm-3 bg-green">
            <h3>101 <i class="fa fa-download"></i></h3>
            <span  class="lead">Download</span>
        </div>
        <div class="col-xs-6 col-sm-3 bg-tomato">
            <h3>101 <i class="fa fa-upload"></i></h3>
            <span  class="lead">Upload</span>
        </div>
        <div class="col-xs-6 col-sm-3 bg-blue">
            <h3>101 <i class="fa fa-users"></i></h3>
            <span  class="lead">Memberes</span>
        </div>
        <div class="col-xs-6 col-sm-3 bg-yellow">
            <h3>101 <i class="fa fa-user"></i></h3>
            <span class="lead">Publisher</span>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <div class="col-x-12 contacts">
            -Contact Us-
        </div>
    </div>
    <div class="rwo">
        <div class="col-xs-12 col-sm-6">
            <div class="col-xs-12 has-feedback">
                <div class="alert alert-success">
                    <p>Msg Sent Successfuly <span class="form-control-feedback msg-sent-error"><i class="fa fa-check-circle"></i></span></p>
                </div>
            </div>
            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="form-control-static">Email </label>
                    </div>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" placeholder="Enter Your Email Here.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="form-control-static">Msg Title </label>
                    </div>
                    <div class="col-xs-10">
                        <input type="text" class="form-control" placeholder="Enter Msg Title Here.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="form-control-static">Msg </label>
                    </div>
                    <div class="col-xs-10">
                        <textarea class="form-control" rows="3" placeholder="Enter Your Questionnaire Here."></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-2">
                        <label class="form-control-static">Send </label>
                    </div>
                    <div class="col-xs-10">
                        <button class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>

        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <div class="col-xs-6">
                    <p><i class="fa fa-address-card gray"></i> Address</p>
                </div>
                <div class="col-xs-6">
                    <p>Egypt , Tanta</p>
                </div>
                <div class="col-xs-6">
                    <p><i class="fa fa-envelope gray"></i> Email</p>
                </div>
                <div class="col-xs-6">
                    <p>ebook@suport.com</p>
                </div>
                <div class="col-xs-6">
                    <p><i class="fa fa-phone gray"></i> Phone</p>
                </div>
                <div class="col-xs-6">
                    <p>Phone : 010-123-123-00</p>
                </div>
                <div class="col-xs-6">
                    <p><i class="fa fa-fax gray"></i> Fax</p>
                </div>
                <div class="col-xs-6">
                    <p>19623</p>
                </div>
                <div class="col-xs-6">
                    <p><i class="fa fa-connectdevelop gray"></i> Social</p>
                </div>
                <div class="col-xs-6 bg-black">
                       <!-- START SOCIAL & Contacts-->
                   <ul class="nav navbar-nav">
                       <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                       <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter fa-lg"></i></a></li>
                       <li class="instagram"><a href="#" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram fa-lg"></i></a></li>
                       <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin fa-lg"></i></a></li>
                   </ul>
                   <!-- END SOCIAL & Contacts -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>