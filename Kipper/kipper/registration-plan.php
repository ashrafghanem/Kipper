<?php
session_start();
if(!isset($_SESSION['loggedin'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#000000"/>

        <title>Choose a Plan</title>

        <link rel="stylesheet" href="../fontawesome/css/font-awesome.css">
        <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/hover.css">
        <link rel="stylesheet" href="../CSS/content-style.css">
        <link rel="stylesheet" href="../CSS/progress-wheel.css">

        <!-- Registration Plan style -->
        <link href="../CSS/reg-plan.css" rel="stylesheet">
        <script src="../JavaScript/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <link rel="stylesheet" href="../CSS/login.css" type="text/css">
        <script src="../JavaScript/scripts.js" type="text/javascript"></script>
        <script src="../JavaScript/typewriter.js" type="text/javascript"></script>

        <!-- Bootstrap CSS CDN -->
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
    <body style="background-color: #2b2b2b;">

    <!-- NavBar -->
    <nav class="navbar navbar-fixed-top navbar-inverse no-select"
         style="font-size:14pt;border: none; margin-bottom: 0; background-color: rgba(0,0,0,0.7);">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>
                <img class="navbar-brand" src="../images/logo_white.png"  style="margin-left:5px;padding:0;width:45px;height:45px;">
                <a style="color: white; font-size: 2em" href="index.php" class="typewrite navbar-brand" data-period="2000" data-type='["Kipper"]'> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="cursor: pointer" onclick=checkCookies_login()><span
                                    class="glyphicon glyphicon-log-in"> </span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->

    <div class="container" style="width: 100%;padding-left:0;">

        <!-- Content -->
        <div class="row text-center" style="margin-top: 80px">
            <h2 style="color: white">Choose a plan</h2>
        </div>
        <div class="row">
            <div class="col-sm-2 text-center"></div>

            <div class="col-sm-4 text-center">
                <div class="grid cs-style-3" style="margin-bottom: -100px">
                    <figure style="cursor: pointer;">
                        <img src="../images/1-month-trial.png" style="width: 100%">
                        <figcaption>
                            <table style="width: 100%;">
                                <tr>
                                    <td>
                                        <h3>1-month trial</h3>
                                        <span>free</span>
                                    </td>
                                    <td align="right">
                                        <form action="registration.php" method="post">
                                            <input name="planNum" type="hidden" value="1">
                                            <input onclick="choose_plan()" name="submit" type="submit" value="Sign Up">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="grid cs-style-3" style="margin-bottom: -100px">
                    <figure style="cursor: pointer;">
                        <img src="../images/6-month.png" style="width: 100%">
                        <figcaption>
                            <table style="width: 100%;">
                                <tr>
                                    <td>
                                        <h3>6-month plan</h3>
                                        <span>$10/month</span>
                                    </td>
                                    <td align="right">
                                        <form action="registration.php" method="post">
                                            <input name="planNum" type="hidden" value="2">
                                            <input onclick="choose_plan()" name="submit" type="submit" value="Sign Up">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-sm-2 text-center"></div>
        </div>

        <div class="row">
            <div class="col-sm-2 text-center"></div>

            <div class="col-sm-4 text-center">
                <div class="grid cs-style-3" style="margin-bottom: -100px">
                    <figure style="cursor: pointer;">
                        <img src="../images/12-month.png" style="width: 100%">
                        <figcaption>
                            <table style="width: 100%;">
                                <tr>
                                    <td>
                                        <h3>12-month plan</h3>
                                        <span>$8.25/month</span>
                                    </td>
                                    <td align="right">
                                        <form action="registration.php" method="post">
                                            <input name="planNum" type="hidden" value="3">
                                            <input onclick="choose_plan()" name="submit" type="submit" value="Sign Up">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-sm-4 text-center">
                <div class="grid cs-style-3">
                    <figure style="cursor: pointer;">
                        <img src="../images/36-month.png" style="width: 100%">
                        <figcaption>
                            <table style="width: 100%;">
                                <tr>
                                    <td>
                                        <h3>36-month plan</h3>
                                        <span>$7/month</span>
                                    </td>
                                    <td align="right">
                                        <form action="registration.php" method="post">
                                            <input name="planNum" type="hidden" value="4">
                                            <input onclick="choose_plan()" name="submit" type="submit" value="Sign Up">
                                        </form>
                                    </td>
                                </tr>
                            </table>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="col-sm-2 text-center"></div>
        </div>
        <!-- End Content -->
    </div>

    <!-- Log In -->
    <div id="login-form" class="modal" onclick="closeLoginDialog()">
        <form class="modal-content animate login" action="../php/login.php" method="post">
            <div class="close-dialog">
                <span onclick="document.getElementById('login-form').style.display='none'" class="closeBtn"
                      title="Close Dialog">&times;</span>
            </div>
            <div class="login-container">
                <label for="email_user"><b>Email or Username</b></label>
                <input type="text" placeholder="Email / Username" title="Email or Username" name="email_user"
                       id="email_user" onfocus="document.getElementById('res').style.display='none'" required>

                <label for="psw"><b>Password</b></label>
                <input autocomplete="off" title="Password" type="password" placeholder="Password" name="psw" id="psw"
                       onfocus="document.getElementById('res').style.display='none'" required>

                <button class="btn btn-primary" id="loginBtn" name="loginBtn" onclick="loginRes()" type="submit">Login</button>
                <p id="res" class="alert alert-danger" style="display: none"></p>
                <label>
                    <input type="checkbox" id="remember" name="remember"> Remember me
                </label>
                <span class="forget-psw">Forgot <a class="forgotPsw" href="#"
                                                   onclick=showForgetForm()>password?</a></span>
            </div>
        </form>
    </div>
    <!-- End Log In -->

    <!-- Forget Password -->
    <div id="forgetPass-form" class="modal" onclick="closeLoginDialog()" style="display: none">
        <form class="modal-content animate forget" action="../php/forgetPass.php" method="post">
            <div class="close-dialog">
                <span onclick="document.getElementById('forgetPass-form').style.display='none'" class="closeBtn"
                      title="Close Dialog">&times;</span>
            </div>
            <div class="forgetPass-container">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Email" title="Email" name="email" id="email"
                       onfocus="document.getElementById('result-fail').style.display='none';" required>

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
                <span onclick="document.getElementById('recoverPass-form').style.display='none'" class="closeBtn"
                      title="Close Dialog">&times;</span>
            </div>
            <div class="recoverPass-container">
                <br>
                <p>Please check your email for a message with your code. Your code is 10 characters long.[<span
                            style="color: red">It might be placed in Junk</span>]</p>
                <input type="text" id="code" name="code" placeholder="Enter Code">
                <button class="btn btn-primary" type="submit" id="submitCode" name="submitCode" onclick="recoverPassRes()">Continue</button>
                <p id="result-success-rec" class="alert alert-success" style="display: none"></p>
                <p id="result-fail-rec" class="alert alert-danger" style="display: none"></p>
            </div>
        </form>
    </div>
    <!-- End Recover Password -->

    <!--Footer-->
    <nav class="navbar fixed-bottom navbar-light "
         style="background-color: #3c3c3c;margin-bottom: 0; position: relative;">

        <!--Footer Links-->
        <div class="container" style="margin-top:20px;">
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
                        <a style="color: #3b5998;text-decoration: none" href="http://www.facebook.com" target="_blank">
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
                            <i title="Instagram"
                               class="hoverInst fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-3x"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <!--Copyright-->
                    <div class="no-select" style="margin-top:60px;
                        height: 40px;font-size: 10pt;color: darkgrey;">
                        &copy;
                        <script>
                            document.write('' + new Date().getFullYear());
                        </script>
                        Copyright
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
    <?php
}
else{
    header("Location: index.php");
}
?>