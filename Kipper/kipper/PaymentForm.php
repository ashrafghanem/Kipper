<?php

/***
 * Created by PhpStorm.
 * User: ans_g
 * Date: 4/28/2018
 * Time: 10:05 AM
 */
if(!isset($_SESSION['loggedin'])) {
    if (isset($_POST['submitReg'])) {
        $username = $_POST['username'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmPass = $_POST['confirmPass'];
        $bdate = $_POST['bdate'];
        $planNum = $_POST['planNum'];
        $gender = $_POST['gender'];

        $sex = '';
        if ($gender == 'Male')
            $sex = 'M';
        else if ($gender == 'Female')
            $sex = 'F';
        else if ($gender == 'Prefer not to say')
            $sex = '-';
        ?>
        <div id="div-parent2" class="container-fluid" style="margin-top: 65px;margin-bottom: 30px">
            <div class="col-md-3"></div>
            <div id="reg-div-2" class="col-md-6"
                 style="color:white;border-radius: 5px;background-color:rgba(0, 0, 0,0.7);">
                <h2>Summary</h2>
                <div class="reg-form">
                    <div class="row form-group" style="margin-bottom: 10px;">
                        <div class="col-md-12">
                            <h4>
                                Name: <?php echo $fname . ' ' . $lname; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <h4>
                                Username: <?php echo $username; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <h4>
                                Email: <?php echo $email; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <h4>
                                Birth Date: <?php echo $bdate; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <h4>
                                Gender: <?php echo $gender; ?>
                            </h4>
                        </div>
                    </div>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-12">
                            <h4>
                                Plan: <?php
                                if ($planNum == 1)
                                    echo "1-month trial";
                                else if ($planNum == 2)
                                    echo "6-month plan";
                                else if ($planNum == 3)
                                    echo "12-month plan";
                                else if ($planNum == 4)
                                    echo "36-month plan";
                                ?>
                            </h4>
                        </div>
                    </div>

                    <?php
                    if ($planNum != 1) {
                        ?>
                        <div class="row form-group" style="margin-bottom: 10px">
                            <div class="col-md-6">
                                <h2>Checkout:</h2>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <?php
                                if ($planNum == 2)
                                    echo "
                            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_blank\">
                                <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                                <input type=\"hidden\" name=\"hosted_button_id\" value=\"DFQY9TW423YDY\">
                                <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif\"
                                       border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                                <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\"
                                     height=\"1\">
                            </form>
                            ";
                                else if ($planNum == 3)
                                    echo "
                            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_blank\">
                                <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                                <input type=\"hidden\" name=\"hosted_button_id\" value=\"L7H5A7MTCHUV4\">
                                <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                                <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                            </form>
                            ";
                                else if ($planNum == 4)
                                    echo "
                            <form action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_blank\">
                                <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                                <input type=\"hidden\" name=\"hosted_button_id\" value=\"SKRCAJ4HUHPF4\">
                                <input type=\"image\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif\" border=\"0\" name=\"submit\" alt=\"PayPal - The safer, easier way to pay online!\">
                                <img alt=\"\" border=\"0\" src=\"https://www.paypalobjects.com/en_US/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                            </form>
                            ";
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="row form-group" style="margin-bottom: 10px">
                        <div class="col-md-3"></div>
                        <div class="col-sm-6 text-right">
                            <div class="col-sm-6">
                                <input style="width:100%;height:50px;margin-bottom: 20px" type="button"
                                       value="Edit" onclick="
                                     $child = document.getElementById('div-parent2');
                                     $parent=document.getElementById('summary');
                                     $parent.removeChild($child);
                                     document.getElementById('mainRegContainer').style.display='block';
                                     document.getElementById('reg-fail').style.display='none';
                                   " class="btn btn-default">
                            </div>
                            <div class="col-sm-6 text-left">
                                <input id="submitReg" style="margin-bottom:20px;height:50px;width:100%" type="submit"
                                       name="submitReg"
                                       onclick="signup()" value="Confirm" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <p id="reg-success" class="alert alert-success" style="margin-bottom:10px;display: none"> </p>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <?php
    }
}else{
    header("Location: registration-plan.php");
}
?>
