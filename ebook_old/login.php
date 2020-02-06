<?php
require_once('header.php');
require_once('navbar.php');
?>
<div class="container">
    <div class="row" id="login">
        <div class="col-xs-12">
            <form class="form" action="##" method="post" id="registrationForm">
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="email">
                            <h4>Email</h4>
                        </label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com"
                            title="enter your email.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="password">
                            <h4>Password</h4>
                        </label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password"
                            title="enter your password.">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <label for="cookies">
                            <h4><a>Forget My Password</a></h4>
                        </label><br>
                        <input type="checkbox">
                        <label for="cookies">
                            <h4>Remember Me</h4>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <br>
                        <button class="btn  btn-success" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
require_once('footer.php');
?>