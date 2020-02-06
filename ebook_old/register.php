<?php
require_once('header.php');
require_once('navbar.php');
?>
<div class="container bootstrap snippet">
        <div class="row">
                <div class="col-sm-3">
                        <div class="text-center">
                                <img src="img/default.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                <h6>Upload a special photo...</h6>
                                <input type="file" class="text-center center-block file-upload">
                        </div>
                        <br>
                        <div class="panel panel-default">
                                <div class="panel-heading">Social Media</div>
                                <div class="panel-body social">
                                        <a href="#"><i class="fa fa-facebook fa-2x" style=""></i> </a>
                                        <a href="#"><i class="fa fa-twitter fa-2x"></i></a> 
                                        <a href="#"><i class="fa fa-instagram fa-2x"></i></a> 
                                        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                                </div>
                        </div>

                </div>
                <div class="col-sm-9">
                        <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                        </ul>
                        <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                        <form class="form" action="##" method="post" id="registrationForm">
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="first_name">
                                                                        <h4>First name</h4>
                                                                </label>
                                                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                                        </div>
                                                </div>
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="last_name">
                                                                        <h4>Last name</h4>
                                                                </label>
                                                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                                        </div>
                                                </div>

                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="phone">
                                                                        <h4>Phone</h4>
                                                                </label>
                                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                                        </div>
                                                </div>

                                                <div class="form-group">
                                                        <div class="col-xs-6">
                                                                <label for="mobile">
                                                                        <h4>Mobile</h4>
                                                                </label>
                                                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                                                        </div>
                                                </div>
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="email">
                                                                        <h4>Location</h4>
                                                                </label>
                                                                <input type="text" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                                                        </div>
                                                </div>
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="email">
                                                                        <h4>Email</h4>
                                                                </label>
                                                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                                        </div>
                                                </div>
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="password">
                                                                        <h4>Password</h4>
                                                                </label>
                                                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                                        </div>
                                                </div>
                                                <div class="form-group">

                                                        <div class="col-xs-6">
                                                                <label for="password2">
                                                                        <h4>Confirm Password</h4>
                                                                </label>
                                                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                                                        </div>
                                                </div>
                                                <div class="form-group">
                                                        <div class="col-xs-12">
                                                                <br>
                                                                <button class="btn  btn-success" type="register"><i class="glyphicon glyphicon-ok-sign"></i> Create</button>
                                                                <button class="btn " type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                                        </div>
                                                </div>
                                        </form>

                                </div>
                        </div>
                </div>
        </div>
        <!--/col-9-->
</div>
<!--/row-->

<?php
require_once('footer.php');
?>