<?php
session_start();
?>

<?php
if(isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#000000" />

    <title>Kipper | Console</title>

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

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../CSS/table-style.css">
    <link rel="stylesheet" href="../CSS/restaurant.css">
    <link href="../CSS/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/content-style.css">
    <link rel="stylesheet" href="../CSS/edit-form.css">
    <script src="../JavaScript/scripts.js" type="text/javascript"></script>
    <script src="../JavaScript/typewriter.js" type="text/javascript"></script>

    <!-- for the pichart-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>
<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> </li>

                <li>
                    <a onclick="showTables()" id="tables-btn">Tables</a>
                </li>
                <li>
                    <a id="restaurants-btn" onclick="showRest()">My Restaurants</a>
                </li>
                <li>
                    <a id="overview-btn" onclick="showOverview()">Overview</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content Holder -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
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
                            <a style="color: white; font-size: 2em" href="index.php" class="typewrite navbar-brand" data-period="2000" data-type='["Kipper"]'> </a>
                        </div>
                        <div class="collapse navbar-collapse" id="myNavbar">
                            <ul class="nav navbar-nav" id="active-list">
                                <li>
                                    <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                                </li>
                            </ul>
                            <script>
                                activate()
                            </script>
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="profile.php">
                                        <span class="glyphicon glyphicon-user"> </span>
                                        <?php echo $_SESSION['username']  ?>
                                    </a>
                                </li>
                                <li>
                                    <a style="cursor: pointer" onclick="logout()">
                                        <span class="glyphicon glyphicon-log-out"> </span> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End of NavBar -->

                <!-- -----------------------------CONTENT---------------------------- -->
                <div class="container-fluid" id="workspace" style="padding-top: 60px;">
                    <div class=row>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container" style="width: 100%;">
                                    <h2>General Info</h2>
                                    <table class="general">
                                        <tr>
                                            <td> Name: </td>
                                            <td id="rname"> McDonalds </td>
                                            <td class="ed" style="text-align: right;">
                                                <a id="edit-name" onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Capacity: </td>
                                            <td id="capacity"> 20 </td>
                                            <td class="ed" style="text-align: right;">
                                                <a id="edit-capacity" onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Telephone: </td>
                                            <td id="tel"> +97292685474 </td>
                                            <td class="ed" style="text-align: right;">
                                                <a id="edit-tel" onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Mobile: </td>
                                            <td id="mobile"> +972265145759 </td>
                                            <td class="ed" style="text-align: right;">
                                                <a id="edit-mobile" onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Email: </td>
                                            <td id="email"> myrestaurant@Kipper.com </td>
                                            <td class="ed" style="text-align: right;">
                                                <a id="edit-email" onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Country: </td>
                                            <td id="Country"> USA </td>
                                            <td class="ed" style="text-align: right;">
                                                <a onclick="showEditDialogue()">
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> P.O. Box: </td>
                                            <td id="pob"> 01603 </td>
                                            <td id="edit-pob" class="ed" style="text-align: right;">
                                                <a>
                                                    <span class="glyphicon glyphicon-edit edit-btn"> </span>
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container" style="width: 100%;">
                                    <h2>Tables</h2>
                                    <div id="piechart" ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-container-->
        </div>
    </div>
    <!--
    <div id="edit-form" class="modal" onclick="closeEditDialog()">
        <form class="modal-content animate login" action="" method="post">
            <div class="close-dialog">
                <span onclick="document.getElementById('edit-form').style.display='none'" class="closeBtn" title="Close Dialog">&times;</span>
            </div>
            <div class="edit-container">
                <label for="to-edit">
                    <b>Email or Username</b>
                </label>
                <input type="text" placeholder="New value" title="Edit value" name="to-edit" id="to-edit" onfocus="document.getElementById('res').style.display='none'"
                    required>
                <button id="loginBtn" name="loginBtn" onclick="loginRes()" type="submit">Login</button>
                <p id="res" class="alert alert-danger" style="display: none"></p>
            </div>
        </form>
    </div>
    <script>
        function closeEditDialog() {
            var modal1 = document.getElementById('edit-form');
            /*var modal2 = document.getElementById('forgetPass-form');
            var modal3 = document.getElementById('recoverPass-form');*/

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target === modal1 /*|| event.target === modal2 || event.target === modal3*/ ) {
                    event.target.style.display = "none";
                }
            }
        }

        function showEditDialogue() {
            var causer = event.target.id;
            if (causer = "edit-email") {
                alert("edit email");
            } else if (cause = "edit-name") {
                alert("edit email");
            } else if (cause = "edit-tel") {
                alert("edit tel");
            } else if (cause = "edit-mobile") {
                alert("edit mobile");
            } else if (cause = "edit-capacity") {
                alert("edit capacity");
            } else if (cause = "edit-country") {
                alert("edit country");
            } else if (cause = "edit-pob") {
                alert("edit pob");
            }
            document.getElementById('edit-form').style.display = 'block';
        }
    </script>
    -->

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        document.onload(showTables);
    </script>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
        $("#menu-toggle-up").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

    <script>
        document.onload(showTables());
    </script>

    <script>
        function showTables() {
            var wrapper = document.getElementById("workspace");
            var myHTML = '';

            for (var i = 0; i < 10; i++) {
                myHTML +=
                    ' <div class="table-wrapper noselect center" id="t1" data-toggle="popover" title="Info" data-content="infoinfo">' +
                    '<span class="circle">' +
                    '<span class="alert-note">' +
                    '</span>' +
                    '<span class="status-bar status-bar-busy">' +
                    'busy' +
                    '</span>' +
                    '<span class="number">' +
                    i +
                    '</span>' +
                    '</span>' +
                    '</div>' +
                    '<!--end-table-wrapper-->';
            }
            wrapper.innerHTML = myHTML;
        }
    </script>
    <script>
        function showRest() {
            var ws = document.getElementById("workspace");
            ws.innerHTML = '<p>Your Restaurants:</p>';
        }
    </script>
    <script>
        function showOverview() {
            var ws = document.getElementById("workspace");
            ws.innerHTML =
            '<div class=row> \n' +
                '\t<div class="col-md-6">\n' +
                '        <div class="card">\n' +
                '            <div class="container" style="width:100%;">\n' +
                '                <h2>General Info</h2> \n' +
                '                <table class="general"> \n' +
                '\t\t\t\t\t<tr>\n' +
                '\t\t\t\t\t\t<td>Name:</td>\n' +
                '\t\t\t\t\t\t<td id="rname">McDonalds</td>\n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align: right;">\n' +
                '\t\t\t\t\t\t\t<a id="edit-name" onclick="showEditDialogue()">\n' +
                '\t\t\t\t\t\t\t<span class="glyphicon glyphicon-edit edit-btn"> </span> \n' +
                '\t\t\t\t\t\t\t</a>                                             \n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>Capacity:</td>\n' +
                '\t\t\t\t\t\t<td id="capacity">20</td>   \n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align:right;">   \n' +
                '\t\t\t\t\t\t\t<a id="edit-capacity" onclick="showEditDialogue()"> <span class="glyphicon glyphicon-edit edit-btn"></span></a>\n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>Telephone:</td>\n' +
                '\t\t\t\t\t\t<td id="tel">+97292685474</td> \n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align:right;">\n' +
                '\t\t\t\t\t\t\t<a id="edit-tel" onclick="showEditDialogue()"><span class="glyphicon glyphicon-edit edit-btn"></span></a>\n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>Mobile:</td>     \n' +
                '\t\t\t\t\t\t<td id="mobile">+972265145759</td>\n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align: right;"><a id="edit-mobile" onclick="showEditDialogue()"><span class="glyphicon glyphicon-edit edit-btn"></span></a>                                             \n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>Email:</td>   \n' +
                '\t\t\t\t\t\t<td id="email">myrestaurant@Kipper.com</td>                              \n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align:right;"><a id="edit-email" onclick="showEditDialogue()"><span class="glyphicon glyphicon-edit edit-btn"></span></a>                                             \n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>Country:</td>\n' +
                '\t\t\t\t\t\t<td id="edit-country" id="Country">USA</td>\n' +
                '\t\t\t\t\t\t<td class="ed" style="text-align: right;"> \n' +
                '\t\t\t\t\t\t\t<a onclick="showEditDialogue()"> <span class="glyphicon glyphicon-edit edit-btn"></span></a>\n' +
                '\t\t\t\t\t\t</td>                                         \n' +
                '\t\t\t\t\t</tr>                                         \n' +
                '\t\t\t\t\t<tr>                                             \n' +
                '\t\t\t\t\t\t<td>P.O. Box:</td>\n' +
                '\t\t\t\t\t\t<td id="pob">01603</td>  \n' +
                '\t\t\t\t\t\t<td id="edit-pob" class="ed" style="text-align: right;"><a><span class="glyphicon glyphicon-edit edit-btn"></span></a>\n' +
                '\t\t\t\t\t\t</td> \n' +
                '\t\t\t\t\t</tr>                                     \n' +
                '\t\t\t\t</table>           \n' +
                '\t\t\t</div>                             \n' +
                '\t\t</div>               \n' +
                '\t</div>              \n' +
                '\t<div class="col-md-6">\n' +
                '\t\t<div class="card">  \n' +
                '\t\t\t<div class="container" style="width:100%;"> \n' +
                '\t\t\t\t<h2>Tables</h2> \n' +
                '\t\t\t\t<div id="piechart" style=" border:solid 1px red;"></div> \n' +
                '\t\t\t</div>                       \n' +
                '\t\t</div>                         \n' +
                '\t</div>                     \n' +
                '</div>';
        }
    </script>
    <script type="text/javascript">
        // Load google charts
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        // Draw the chart and set the chart values
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Status', 'Number of tables'],
                ['Busy', 8],
                ['Reserved', 2],
                ['Free', 2],
                ['Unavailable', 1],
            ]);
            // Optional; add a title and set the width and height of the chart
            var options = {
                'title': 'My restaurant\'s status',
                'width': 400,
                'height': 300,
            };
            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
<?php
}else{
header("Location: ../kipper/index.php");
}
?>