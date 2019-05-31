<?php
session_start();
if(isset($_SESSION['plan_chosen']) and !isset($_SESSION['loggedin'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#000000"/>

        <title>Registration</title>

        <link rel="stylesheet" href="../fontawesome/css/font-awesome.css">
        <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/hover.css">
        <link rel="stylesheet" href="../CSS/content-style.css">
        <link rel="stylesheet" href="../CSS/progress-wheel.css">

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
                <script>activate()</script>
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="cursor: pointer" onclick=checkCookies_login()><span
                                    class="glyphicon glyphicon-log-in"> </span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->

    <div id='summary' class="container"
         style="width: 100%;padding-left:0;margin-top: 0;background-image: url('../images/rest4.jpg');"></div>

    <div id="mainRegContainer" class="container"
               style="width: 100%;padding-left:0;margin-top: 0;background-image: url('../images/rest4.jpg');">
        <div id="div-parent1" class="container-fluid" style="margin-top: 65px;margin-bottom: 30px">
            <div class="col-md-3"></div>
            <div id="reg-div-1" class="col-md-6" style="border-radius: 5px;background-color:rgba(255, 255, 255,0.5);">
                <h2>Create an account</h2>
                <form class="reg-form" action="/PaymentForm.php" method="post">
                    <div class="row form-group" style="margin-bottom: 10px;">
                        <div class="col-md-6" >
                            <label class="sr-only" for="fname" style="height: 50px">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="First Name"
                                   required style="height: 50px">
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="lname" style="height: 50px">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Last Name"
                                   required style="height: 50px">
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-6">
                            <label class="sr-only" for="username" style="height: 50px">Username</label>
                            <input pattern="^[a-z0-9_.]{3,15}$"
                                   title="Username must only contain letters, digits, underscore and dots of length 3 to 15"
                                   autocomplete="off" type="text" id="username" name="username" class="form-control"
                                   placeholder="Username" required style="height: 50px">
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="e-mail" style="height: 50px">Email</label>
                            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email Address Format"
                                   type="email" id="e-mail" name="e-mail" class="form-control"
                                   placeholder="Email Address" required style="height: 50px">
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-6">
                            <label class="sr-only" for="password" style="height: 50px">Password</label>
                            <input pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$"
                                   title="Minimum eight characters, at least one letter, one number and one special character"
                                   autocomplete="off" type="password" id="password" name="password" class="form-control"
                                   placeholder="Enter a Password" required style="height: 50px">
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="confirm-password" style="height: 50px">Confirm Password</label>
                            <input autocomplete="off" type="password" id="confirm-password" name="confirm-password"
                                   class="form-control" placeholder="Confirm Password" required style="height: 50px">
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-md-6">
                            <select autocomplete="off" title="Gender" name="gender" id="gender" class="form-control"
                                    required style="margin-bottom:20px;height: 50px">
                                <option value="">-</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="bdate" style="height: 50px">Birth Date</label>
                            <input autocomplete="off" type="date" title="Birth Date" id="bdate" name="bdate"
                                   class="form-control" placeholder="Birth Date" required style="height: 50px">
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-sm-6 text-left"></div>

                        <div class="col-sm-6 text-right">
                            <div class="col-sm-6 text-left">
                                <input id="planNum" name="planNum" type="hidden" value="<?php echo $_POST['planNum']?>">
                                <input id="submitReg" style="margin-bottom:20px;height:50px;width:100%" type="submit" name="submitReg"
                                       onclick="signupResult()" value="Confirm" class="btn btn-primary">
                            </div>
                            <div class="col-sm-6">
                                <input style="margin-bottom:20px;width:100%;height:50px;" type="button"
                                       value="Cancel" class="btn btn-default">
                            </div>
                        </div>
                    </div>
                    <p id="reg-fail" class="alert alert-danger" style="display: none"></p>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <?php
    include 'PaymentForm.php';
    ?>

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
    <nav class="navbar fixed-bottom navbar-light" style="background-color: #3c3c3c;margin-bottom: 0;">
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
    header("Location: registration-plan.php");
}
?>