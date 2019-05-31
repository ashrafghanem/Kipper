<?php
session_start();
?>
<?php
if(isset($_SESSION['username']) && isset($_SESSION['loggedin'])) {
    ?>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#000000"/>

        <title>Kipper | Add Restaurant</title>

        <link rel="stylesheet" href="../fontawesome/css/font-awesome.css">
        <link rel="stylesheet" href="../fontawesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/hover.css">
        <link rel="stylesheet" href="../CSS/content-style.css">
        <link rel="stylesheet" href="../CSS/progress-wheel.css">
        <link rel="stylesheet" href="../CSS/login.css">
        <link rel="stylesheet" href="../CSS/clockpicker.css">
        <link rel="stylesheet" href="../CSS/standalone.css">
        <script src="../JavaScript/scripts.js" type="text/javascript"></script>
        <script src="../JavaScript/clockpicker.js" type="text/javascript"></script>
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

    <body style="background-color: #f5f5f5;">
    <!-- NavBar -->
    <nav class="navbar navbar-fixed-top navbar-inverse no-select"
         style="font-size:14pt;border: none; margin-bottom: 0; background-color: rgba(0,0,0,0.7);">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img class="navbar-brand" src="../images/logo_white.png"
                     style="margin-left:5px;padding:0;width:45px;height:45px;">
                <a style="color: white; font-size: 2em" href="index.php" class="typewrite navbar-brand"
                   data-period="2000" data-type='["Kipper"]'> </a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <script>
                    activate()
                </script>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="console.php"><span class="glyphicon glyphicon-cutlery"> </span> Console</a></li>
                    <li>
                        <a href="profile.php">
                            <span class="glyphicon glyphicon-user"> </span>
                            <?php echo $_SESSION['username'] ?>
                        </a>
                    </li>
                    <li><a style="cursor: pointer" onclick="logout()"><span class="glyphicon glyphicon-log-out"> </span>
                            Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of NavBar -->
    <div id="ashraf"></div>
    <div class="container" style="width: 100%;padding-left:0;margin-top: 0;">
        <div id="div-parent" class="container-fluid" style="margin-top: 65px;margin-bottom: 30px">
            <div class="col-md-3"></div>
            <div id="reg-div-1" class="col-md-6" style="border-radius: 5px;background-color:rgba(255, 255, 255,0.5);">
                <h2>Add a restaurant</h2>
                <form class="reg-form" action="/PaymentForm.php" method="post">
                    <h3 style="padding-left: 0em;">General information</h3>
                    <h4 style="padding-left: 1em;">Specify your restaurant's name and location</h4>
                    <div class="row form-group" style="margin-bottom: 20px;">
                        <div class="col-md-12">
                            <label class="sr-only" for="rname" style="height: 50px">Restaurant Name</label>
                            <input type="text" id="rname" name="rname" class="form-control"
                                   placeholder="Restaurant Name" required style="height: 50px">
                        </div>
                    </div>
                    <div class="row form-group" style="margin-bottom: 20px;">
                        <div class="col-md-6">
                            <label class="sr-only" for="country" style="height: 50px">City</label>
                            <select name="country" id="country" class="form-control" required style="height: 50px">
                                <option value="" disabled selected>Country</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia, Plurinational State of</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, the Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.S.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="city" style="height: 50px;">City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City" required
                                   style="height: 50px">
                        </div>
                    </div>
                    <h3 style="padding-left: 0em;">Contact information</h3>
                    <h4 style="padding-left: 1em;">Specify your restaurant's contact information such as phone numbers
                        and P.O.B.</h4>
                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-md-6">
                            <label class="sr-only" for="pnumber" style="height: 50px">Tel</label>
                            <input title="Your restaurant's telephone number" autocomplete="off" type="tel" id="pnumber"
                                   name="pnumber" class="form-control"
                                   placeholder="Telephone" required style="height: 50px">
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="mnumber" style="height: 50px">Tel</label>
                            <input title="Your restaurant's business mobile number" autocomplete="off" type="tel"
                                   id="mnumber" name="mnumber" class="form-control"
                                   placeholder="Mobile" style="height: 50px">
                        </div>
                    </div>
                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-md-6">
                            <label class="sr-only" for="e-mail" style="height: 50px">Email</label>
                            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Email Address Format"
                                   type="email" id="e-mail" name="e-mail"
                                   class="form-control" placeholder="Email Address" required style="height: 50px">
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="pobox" style="height: 50px">City</label>
                            <input type="text" id="pobox" name="pobox" class="form-control" placeholder="P.O. Box"
                                   required style="height: 50px">
                        </div>
                    </div>
                    <h3 style="padding-left: 0em;">Restaurant information</h3>
                    <h4 style="padding-left: 1em;">Specify your restaurant's capacity and services</h4>
                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-md-6">
                            <label class="sr-only" for="table-count" style="height: 50px">Tel</label>
                            <input title="number of tables" autocomplete="off" type="number" id="table-count"
                                   name="table-count" class="form-control"
                                   placeholder="number of tables" required style="height: 50px">
                        </div>
                        <div class="col-md-3">
                            <label class="sr-only" for="work-hrs" style="height: 50px">Tel</label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top"
                                 data-autoclose="true">
                                <input type="text" class="form-control" value="13:14">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label class="sr-only" for="work-hrs" style="height: 50px">Tel</label>
                            <div class="input-group clockpicker" data-placement="left" data-align="top"
                                 data-autoclose="true">
                                <input type="text" class="form-control" value="13:14">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time" onclick="clockpicker()"></span>
                                </span>
                            </div>


                        </div>
                    </div>
                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-md-6">
                            <select autocomplete="off" title="Gender" name="gender" id="gender" class="form-control"
                                    required style="height: 50px">
                                <option value="">-</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Prefer not to say">Prefer not to say</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="sr-only" for="bdate" style="height: 50px">Birth Date</label>
                            <input autocomplete="off" type="date" title="Birth Date" id="bdate" name="bdate"
                                   class="form-control" placeholder="Birth Date"
                                   required style="height: 50px">
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 20px">
                        <div class="col-sm-6 text-left"></div>

                        <div class="col-sm-6 text-right">
                            <div class="col-sm-6">
                                <input style="width:100%;height:50px;margin-bottom: 20px" onclick="enable()"
                                       type="button" value="Cancel" class="btn btn-default">
                            </div>
                            <div class="col-sm-6 text-left">
                                <input type="hidden" value="<?php echo $_POST['planNum'] ?>">
                                <input id="submitReg" style="height:50px;width:100%" type="submit" name="submitReg"
                                       onclick="signupResult()" value="Confirm"
                                       class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                    <p id="reg-fail" class="alert alert-danger" style="display: none"></p>
                    <p id="reg-success" class="alert alert-success" style="display: none"></p>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <script type="text/javascript">
        $('.clockpicker').clockpicker();
    </script>
    </body>
    </html>
    <?php
}else{
    header("Location: ../kipper/index.php");
}
?>