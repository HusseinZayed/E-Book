<?php
require_once('header.php');
require_once('navbar.php');
?>
 <div class="container">
                <div class="row">
                    <div class="col-xs-4 col-xs-offset-4">
                    <form class="form " id="registrationForm">
                            <div class="form-group has-error has-feedback">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                                    <span class="fa fa-times-circle form-control-feedback"></span>
                                </div>
                            <div class="form-group has-success has-feedback">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                    <span class="fa fa-check-circle form-control-feedback"></span>
                                </div>
                            <div class="form-group">
                                    <label for="cookies">
                                        <h4><a>Forget My Password</a></h4>
                                    </label><br>
                                    <input type="checkbox">
                                    <label for="cookies">
                                        <h4>Remember Me</h4>
                                    </label>
                            </div>
                            <div class="form-group">
                                    <button class="btn  btn-success" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                   
                    </div>
<?php
require_once('footer.php');
?>