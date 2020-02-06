 <?php
 ?>
 
 <!-- START HEADER -->
    <!-- START SOCIAL -->
    <div class="navbar icon-set ">
            <div class="container">
                <nav class="nav ">
                    <div class="container">
                        <ul class="nav navbar-nav">
                            <li class="facebook"><a href="#" data-toggle="tooltip" title="Facebook"><i
                                        class="fa fa-facebook fa-lg"></i></a></li>
                            <li class="twitter"><a href="#" data-toggle="tooltip" title="Twitter"><i
                                        class="fa fa-twitter fa-lg"></i></a></li>
                            <li class="instagram"><a href="#" data-toggle="tooltip" title="Instagram"><i
                                        class="fa fa-instagram fa-lg"></i></a></li>
                            <li class="linkedin"><a href="#" data-toggle="tooltip" title="LinkedIn"><i
                                        class="fa fa-linkedin fa-lg"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="fa fa-language fa-1x"></i>
                                    Language<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a data-toggle="modal" href="#modal-id-language">العربية</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END SOCIAL -->
        <!-- START NAVBAR -->
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><span id="tit">E</span>-BOOK</a>
                </div>
    
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Departments <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="results.html">Economics</a></li>
                                <li><a href="results.html">Programming</a></li>
                                <li><a href="results.html">Health</a></li>
                                <li><a href="results.html">Politics</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Types <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="results.html">Story</a></li>
                                <li><a href="results.html">Short Story</a></li>
                                <li><a href="results.html">Rewaya</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="profile.php"><img style="max-width:30px;" src="img/user.png" class="img-circle img-responsivr "> Welcome Account</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-wrench fa-1x"></i>
                                Setting<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="register.php"><i class="fa fa-user-plus"></i> Register</a></li>
                                <li><a href="login.php"><i class="fa fa-user"></i> Login</a></li>
                                <li><a href="logout.php"><i class="fa fa-power-off"></i> LogOut</a></li>
                                <li><a href="dashboard.html"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                                <li><a href="profile.php"><i class="fa fa-home"></i> Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
     <!-- START MODAL NOT AVAILABLE LANGUAGE  -->
     <section class="modal-buy-book">
            <div class="modal fade" id="modal-id-language">
                <div class="modal-dialog">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title"><b>تحت التطوير جارى العمل عليها</b></h4>
                        </div>
                        <div class="modal-body ">
                            <div class="alert alert-warning">
                                <b>
                                    <h3>  ..اللغه العربيه ليست متوفره الان <i class="fa fa-language" style="color: black;"> </i> 
                                    </h3>
                                </b>
                            </div>
    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">الغاء</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END MODAL NOT AVAILABLE LANGUAGE  -->
        <!-- END NAVBAR -->
        <!-- END HEADER -->
        <?php
        ?>
        