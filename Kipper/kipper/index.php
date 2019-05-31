<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#000000" />

    <title>Kipper | Home</title>

    <link rel="stylesheet" href="../fontawesome/css/font-awesome.css">
    <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/hover.css">
    <link rel="stylesheet" href="../CSS/content-style.css">
    <link rel="stylesheet" href="../CSS/progress-wheel.css">
    <link rel="stylesheet" href="../CSS/login.css">
    <script src="../JavaScript/scripts.js" type="text/javascript"></script>
    <script src="../JavaScript/typewriter.js" type="text/javascript"></script>

    <!-- Bootstrap CSS and JS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css" type="text/css">

    <script src="../JavaScript/jquery.min.js"></script>
    <script src="../JavaScript/jquery-1.12.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
</head>
<body style="background-color: rgb(0,0,0);" id="top">
<script>slide_smoothly()</script>

<!-- NavBar -->
<nav class="navbar navbar-fixed-top navbar-inverse no-select" style="font-size:14pt;border: none; margin-bottom: 0; background-color: rgba(0,0,0,0.7);">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
            </button>
            <img class="navbar-brand" src="../images/logo_white.png"  style="margin-left:5px;padding:0;width:45px;height:45px;">
            <a style="color: white; font-size: 2em" href="" class="typewrite navbar-brand" data-period="2000" data-type='["Kipper"]'> </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav" id="active-list">
                <li><a class="header-btn active-btn" href="#top" >Home</a></li>
                <li><a class="header-btn" href="#about" >About</a></li>
                <li><a class="header-btn" href="#developers" >Developers</a></li>
                <li><a class="header-btn" href="#contact" >Contact Us</a></li>
                <li>
                    <form action="" style="margin-left:10px;margin-right:10px;">
                        <input class="search" type="text" placeholder="Search.." name="search">
                    </form>
                </li>
            </ul>

            <script>activate()</script>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['loggedin'])) {
                    ?>
                <li><a href="console.php"><span class="glyphicon glyphicon-cutlery"> </span> Console</a></li>
                 <li>
                     <a href="profile.php">
                         <span class="glyphicon glyphicon-user"> </span>
                         <?php echo $_SESSION['username']  ?>
                     </a>
                 </li>
                <li><a style="cursor: pointer" onclick="logout()"><span class="glyphicon glyphicon-log-out"> </span> Logout</a></li>
                    <?php
                }else {
                    ?>
                    <li><a href="registration-plan.php"><span class="glyphicon glyphicon-user"> </span> Sign Up</a></li>
                    <li><a style="cursor: pointer" onclick=checkCookies_login()><span class="glyphicon glyphicon-log-in"> </span> Login</a></li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!-- End of NavBar -->

<!-- Carousel -->
<div class="container" style="width: 100%;padding-left:0;padding-right:0;">
    <div class="row" style="z-index:0;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" style="margin-top:0;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="width:100% !important">
                <div class="item active" >
                    <img src="../images/rest1.jpg" class="d-block img-fluid" alt="Restaurant One" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/rest2.jpg" class="d-block img-fluid" alt="Restaurant Two" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/rest3.jpg" class="d-block img-fluid" alt="Restaurant Three" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/rest4.jpg" class="d-block img-fluid" alt="Restaurant Four" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/rest5.jpg" class="d-block img-fluid" alt="Restaurant Five" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="../images/rest6.jpg" class="d-block img-fluid" alt="Restaurant Six" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Title</h3>
                        <p>Some Text!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- End Carousel -->

    <!-- Content -->
    <div class="row" id="about" style="color:white;margin: 10px 5px 10px 5px">
        <div class="col-sm-4 text-center">
            <div  class="content-holder">
                <?php
                if(!isset($_SESSION['loggedin'])){
                ?>
                <h2>Restaurant Owner? </h2>
                <h4 id="myID" style="line-height: 1.5;">
                    Kipper is a very useful website that helps restaurant owners manage their
                    restaurants. All information are available for users who surf the restaurants in order
                    to reserve an order. Four subscription plans are available right now.
                </h4>
                <?php
                }else{
                ?>
                    <h2>Manage your Restaurant </h2>
                    <h4 style="line-height: 1.5">
                        In console you can manage your restaurants easily and view all the tables.</h4>
                    <br><br>
                    <div style="text-align: center">
                        <a href="console.php" class="button1 bouncy" style="text-decoration: none">GO TO CONSOLE</a>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>

        <div class="col-sm-4 text-center">
            <div class="content-holder">
                <?php
                if(!isset($_SESSION['loggedin'])) {
                    ?>
                    <h2>Normal Customer? </h2>
                    <h4 style="line-height: 1.5">
                        Find a table for the dinner tonight.
                        Search wide collection of restaurants and reserve a table in simple easy few steps.
                    </h4>
                    <?php
                }else {
                    ?>
                    <h2>Go Worldwide</h2> <br>
                    <h4 style="line-height: 1.5">
                        Join a huge network of restaurants and let people over the seas find and reserve in your restaurant.
                    </h4>
                    <br><br>
                    <div style="text-align: center">
                        <a href="AddRestaurant.php" class="button1 bouncy" style="text-decoration: none">ADD RESTAURANT</a>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="col-sm-4 text-center">
            <div class="content-holder">
                <?php
                if(!isset($_SESSION['loggedin'])) {
                    ?>
                    <h2>Join Us </h2>
                    <h4 style="line-height: 1.5">
                        If you're a restaurant owner and need a decent management tool that will help
                        you administrate your store in an easy portable way, then why wait?!</h4>
                    <h4>
                        Create an account and join us!
                    </h4>
                    <br>
                    <div style="text-align: center">
                        <a href="registration-plan.php" class="button1 bouncy" style="text-decoration: none">SIGN UP</a>
                    </div>
                    <?php
                }else{
                    ?>
                    <h2>Profile </h2><br>
                    <h4 style="line-height: 1.5">
                        You can view and modify or update your profile information.
                        Just click on the button below.
                    </h4>
                    <br><br>
                    <div style="text-align: center">
                        <a href="profile.php" class="button1 bouncy" style="text-decoration: none">Profile</a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="row" align="center">
        <iframe width="100%" height="500px" src="https://www.youtube.com/embed/2gwmTOdga24?rel=0" frameborder="0" allowfullscreen >

        </iframe>
    </div>
    <div class="row developer-holder" id="developers">
        <h2>Developers:</h2>
    </div>
    <div class="developer-holder">
        <div class="row text-center" >
            <div id="ashraf_info" class="col-xs-6 col-md-6 placeholder">
                <img style="display: block; margin-left: auto; margin-right: auto; border-radius: 50%" src="../images/ashraf-dev.png" class="img-responsive" alt="Ashraf's Pic" width="200" height="200" >
                <h4 class="developer">Ashraf Ghanem</h4>

            </div>
            <div class="col-xs-6 col-md-6 placeholder">
                <img style="display: block;margin-left: auto; margin-right: auto; border-radius: 50%" src="../images/nizar-dev.png" class="img-responsive" alt="Nizar's Picture" width="200" height="200" >
                <h4 class="developer">Nizar Hattab</h4>
            </div>
        </div>
    </div> <!-- End Content -->
</div>

<!-- Log In -->
<div id="login-form" class="modal" onclick="closeLoginDialog()">
    <form class="modal-content animate login" action="../php/login.php" method="post">
        <div class="close-dialog">
            <span onclick="document.getElementById('login-form').style.display='none'" class="closeBtn" title="Close Dialog">&times;</span>
        </div>
        <div class="login-container">
            <label for="email_user"><b>Email or Username</b></label>
            <input type="text" placeholder="Email / Username" title="Email or Username" name="email_user" id="email_user" onfocus="document.getElementById('res').style.display='none'" required>

            <label for="psw"><b>Password</b></label>
            <input autocomplete="off" title="Password" type="password" placeholder="Password" name="psw" id="psw" onfocus="document.getElementById('res').style.display='none'" required>

            <button class="btn btn-primary" id="loginBtn" name="loginBtn" onclick="loginRes()" type="submit">Login</button>
            <p id="res" class="alert alert-danger" style="display: none"></p>
            <label>
                <input type="checkbox" id="remember" name="remember"> Remember me
            </label>
            <span class="forget-psw">Forgot <a class="forgotPsw" href="#" onclick=showForgetForm() >password?</a></span>
        </div>
    </form>
</div>
<!-- End Log In -->

<!-- Forget Password -->
<div id="forgetPass-form" class="modal" onclick="closeLoginDialog()" style="display: none">
    <form class="modal-content animate forget" action="../php/forgetPass.php" method="post">
        <div class="close-dialog">
            <span onclick="document.getElementById('forgetPass-form').style.display='none'" class="closeBtn" title="Close Dialog">&times;</span>
        </div>
        <div class="forgetPass-container">
            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Email" title="Email" name="email" id="email" onfocus="document.getElementById('result-fail').style.display='none';" required>

            <button class="btn btn-primary" id="submit" name="submit" onclick="forgetPassRes()" type="submit">Submit</button>
            <p id="result-fail" class="alert alert-danger" style="display: none"></p>
            <div align="center" id="progress-wheel" style="display:none">
                <div class="loader"></div>
            </div>
        </div>
    </form>
</div>
<!-- End Forget Password -->

<!-- Recover Password -->
<div id="recoverPass-form" class="modal" onclick="closeLoginDialog()" style="display: none">
    <form class="modal-content animate recover" action="../php/recoverPass.php" method="post">
        <div class="close-dialog">
            <span onclick="document.getElementById('recoverPass-form').style.display='none'" class="closeBtn" title="Close Dialog">&times;</span>
        </div>
        <div class="recoverPass-container">
            <br>
            <p>Please check your email for a message with your code. Your code is 10 characters long.[<span style="color: red">It might be placed in Junk</span>]</p>
            <input type="text" id="code" name="code" placeholder="Enter Code">
            <button class="btn btn-primary" type="submit" id="submitCode" name="submitCode" onclick="recoverPassRes()">Continue</button>
            <p id="result-success-rec" class="alert alert-success" style="display: none"></p>
            <p id="result-fail-rec" class="alert alert-danger" style="display: none"></p>
        </div>
    </form>
</div>
<!-- End Recover Password -->

<!--Footer-->
<nav class="navbar fixed-bottom navbar-light" id="contact" style="background-color: #3c3c3c;margin-bottom: 0;">

    <!--Footer Links-->
    <div class="container" style="margin-top:20px;" >
        <div class="row">
            <div class="col-sm-4 text-center">
                <div>
                    <h3 style="color: darkgrey;">Contact us:</h3>
                        <ul style="list-style-type: none;color: darkgrey;">
                            <li>
                                <i class="fa fa-envelope"></i>
                                kipper.corporation@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-mobile"></i>
                                +972 568067399
                            </li>
                            <li>
                                <i class="fa fa-home"></i>
                                Tulkarm - 304
                            </li>
                        </ul>                    
                </div>
            </div>

            <div class="col-sm-4 no-select text-center">
                <div style="white-space: nowrap; margin-top: 60px">
                    <!--Facebook-->
                    <a  style="color: #3b5998;text-decoration: none" href="http://www.facebook.com" target="_blank">
                        <i title="Facebook" class="hoverFb fa fa-facebook fa-lg white-text mr-md-5 mr-3 fa-3x"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--Twitter-->
                    <a style="color: #00aced;text-decoration: none" href="http://www.twitter.com" target="_blank">
                        <i title="Twitter" class="hoverTw fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-3x"></i>
                    </a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <!--Instagram-->
                    <a style="color: #bc2a8d;text-decoration: none" href="http://www.instagram.com" target="_blank">
                        <i title="Instagram" class="hoverInst fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-3x"></i>
                    </a>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <!--Copyright-->
                <div class="no-select" style="margin-top:60px;
                        height: 40px;font-size: 10pt;color: darkgrey;">
                    &copy;
                    <script>
                        document.write(''+new Date().getFullYear());
                    </script> Copyright
                </div>
                <!--/Copyright-->
            </div>
        </div>
    </div>
    <!--/Footer Links-->
</nav>
<!--/Footer-->

</body>
</html>