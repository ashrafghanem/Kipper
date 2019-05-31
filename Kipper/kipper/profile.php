<?php
session_start();
if(isset($_SESSION['loggedin'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#000000"/>

        <title>Kipper | Profile</title>

        <link rel="stylesheet" href="../CSS/content-style.css">
        <link rel="stylesheet" href="../CSS/profile-card.css">
        <link rel="stylesheet" href="../CSS/profile-style.css">
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

        <!-- Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <body style="background-color: #f5f5f5;">
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
                <img class="navbar-brand" src="../images/logo_white.png"
                     style="margin-left:5px;padding:0;width:45px;height:45px;">
                <a style="color: white; font-size: 2em" href="index.php" class="typewrite navbar-brand" data-period="2000" data-type='["Kipper"]'> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <<li><a href="console.php"><span class="glyphicon glyphicon-cutlery"> </span> Console</a></li>
                    <li><a style="cursor: pointer" onclick="logout()"><span class="glyphicon glyphicon-log-out"> </span>
                            Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->

    <div class="container">
        <div class="row" style="height:350px;">
            <div class="cover-holder">
                <img src="../images/rest4.jpg" class="cover">
            </div>
        </div>

        <div class="row" align="center">
            <img class="profile-pic" src="../images/ashraf-dev.png" >
        </div>

        <div class="row">
            <div class="col-md-4">
                <div id="prof-card-1" class="card" align="center">
                    <a  onclick="openEdit()" class="icon" id="edit"><i class="material-icons">mode_edit</i></a>
                    <a  onclick="closeEdit()" style="display: none" class="icon" id="submit-edit"><i class="material-icons">check_circle</i></a>
                    <h3 id="name"><b id="fname">Ashraf</b> <b id="lname">Ghanem</b></h3>
                    <p id="username">ashrafghanem</p>
                    <p id="email">ashraf.nadir3@gmail.com</p>
                    <p id="plan">1-month free trial</p>
                    <hr>
                    <h4><b>Basic Info.</b></h4>
                    <p id="gender">Male</p>
                    <p id="bdate">01/11/1998</p>
                    <p id="mobileNum">00972595736981</p>
                    <hr>
                    <h4><b>Description</b></h4>
                    <p align="left" id="description">I am Ashraf Ghanem</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" align="center">
                    <h3><b>Restaurants</b></h3>
                    <h4 style="padding: 5px"><a style="text-decoration: none">Restaurant 1</a></h4>
                    <h4 style="padding: 5px"><a style="text-decoration: none">Restaurant 2</a></h4>
                    <h4 style="padding: 5px"><a style="text-decoration: none">Restaurant 3</a></h4>
                    <h4 style="padding: 5px"><a style="text-decoration: none">Restaurant 4</a></h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" align="center">
                    <h3><b>Security</b></h3>
                    <p align="left">• Password must contain at least 8 characters. </p>
                    <p align="left">• At least one of these must be included: a digit, a letter and a symbol. </p>
                    <form>
                        <input id="currPass" name="currPass" type="password" placeholder="Existing Password" required>
                        <input id="newPass" name="newPass" type="password" placeholder="New Password" required>
                        <input id="confirmPass" name="confirmPass" type="password" placeholder="Confirm New Password" required>
                        <input class="btn btn-primary" name="save" type="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
    <?php
}else{
    header("Location: index.php");
}
?>