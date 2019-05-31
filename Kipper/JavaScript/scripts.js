function closeLoginDialog() {
    var modal1 = document.getElementById('login-form');
    var modal2 = document.getElementById('forgetPass-form');
    var modal3 = document.getElementById('recoverPass-form');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target === modal1 || event.target === modal2 || event.target===modal3) {
            event.target.style.display = "none";
        }
    }
}
function checkCookies_login() {
    var user_cookie = getCookie('user');
    var pass_cookie = getCookie('pass');

    document.getElementById('email_user').value=user_cookie;
    document.getElementById('psw').value=pass_cookie;

    document.getElementById('login-form').style.display='block';
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function showForgetForm() {
    document.getElementById('login-form').style.display='none';
    document.getElementById('forgetPass-form').style.display='block';
}

function activate() {
    // Add active class to the current button (highlight it)
    var btns = document.getElementsByClassName("header-btn");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active-btn");
            current[0].className = current[0].className.replace("active-btn", "");
            this.className += " active-btn";

            for(var j =0; j<btns.length;j++){
                if(btns[j]===current[0]){
                    btns[j].style.color="white";
                }
                else{
                    btns[j].style.color="#9d9d9d";
                }
            }
        });
    }
}
function enable() {
    $div = document.getElementById('reg-div-1');
    $div.className +=" reg-div-1";

    var delayInMilliseconds = 1000; //1 second
    setTimeout(function() {
        //your code to be executed after 1 second
        $parent = document.getElementById('div-parent1');
        $parent.removeChild($div);
        window.location.replace("../kipper/index.php");
    }, delayInMilliseconds);
}

function slide_smoothly() {
    $(document).ready(function () {
        // Add smooth scrolling to all links
        $("a").on('click', function (event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function () {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            }
        });
    });
}
function forgetPassRes(){
    document.getElementById('progress-wheel').style.display='block';
    $(document).ready(function () {
        $(".forget").submit(function (event) {
            event.preventDefault();
            var email = $("#email").val();
            var submit = $("#submit").val();

            $("#result-fail").load("../php/forgetPass.php", {
                email: email,
                submit: submit
            },function (response) {
                if(response==''){
                    document.getElementById('progress-wheel').style.display='none';
                    document.getElementById('result-fail').style.display='none';
                    document.getElementById('forgetPass-form').style.display='none';
                    document.getElementById('recoverPass-form').style.display='block';
                }
                else if (response=='Email doesn\'t exist in the database!'){
                    document.getElementById('progress-wheel').style.display='none';
                    document.getElementById('result-fail').style.display='block';
                    document.getElementById('result-fail').innerHTML=response;
                }
            });
        });
    });
}

function recoverPassRes(){
    $(document).ready(function () {
        $(".recover").submit(function (event) {
            event.preventDefault();
            var email = $("#email").val();
            var code = $("#code").val();
            var submitCode = $("#submitCode").val();

            $("#result-success-rec").load("../php/recoverPass.php", {
                email: email,
                code : code,
                submitCode: submitCode
            },function (response) {
                if(response=='This code is the new password for your account'){
                    document.getElementById('result-fail-rec').style.display='none';
                    document.getElementById('result-success-rec').style.display='block';
                    document.getElementById('result-success-rec').innerHTML=response;
                }
                else if (response=='The inserted recovery code is wrong. Please try again!'){
                    document.getElementById('result-success-rec').style.display='none';
                    document.getElementById('result-fail-rec').style.display='block';
                    document.getElementById('result-fail-rec').innerHTML=response;
                }
            });
        });
    });
}
function showSummary() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var username = $("#username").val();
    var email = $("#e-mail").val();
    var password = $("#password").val();
    var confirmPass = $("#confirm-password").val();
    var gender = $("#gender").val();
    var bdate = $("#bdate").val();
    var planNum = $("#planNum").val();
    var submitReg = $("#submitReg").val();

    $("#summary").load("../kipper/PaymentForm.php", {
        fname:fname,
        lname:lname,
        username:username,
        email: email,
        password: password,
        confirmPass: confirmPass,
        gender:gender,
        bdate:bdate,
        planNum: planNum,
        submitReg: submitReg
    },function () {
        document.getElementById('mainRegContainer').style.display="none";
    });
}
function signupResult() {
    $(document).ready(function () {
        $(".reg-form").submit(function (event) {
            event.preventDefault();
            var fname = $("#fname").val();
            var lname = $("#lname").val();
            var username = $("#username").val();
            var email = $("#e-mail").val();
            var password = $("#password").val();
            var confirmPass = $("#confirm-password").val();
            var gender = $("#gender").val();
            var bdate = $("#bdate").val();
            var planNum = $("#planNum").val();
            var submitReg = $("#submitReg").val();

            $("#reg-fail").load("../php/registerProcess.php", {
                fname:fname,
                lname:lname,
                username:username,
                email: email,
                password: password,
                confirmPass: confirmPass,
                gender:gender,
                bdate:bdate,
                planNum: planNum,
                submitReg: submitReg
            },function (response) {
                if(response==="Username already exists!"){
                    document.getElementById('reg-fail').style.display='block';
                    document.getElementById('reg-fail').innerHTML=response;
                }
                else if(response==="Email already exists!") {
                    document.getElementById('reg-fail').style.display = "block";
                    document.getElementById('reg-fail').innerHTML = response;
                }
                else if(response=== "Check your inputs again!"){
                    document.getElementById('reg-fail').style.display = "block";
                    document.getElementById('reg-fail').innerHTML = response;
                }
                else{
                    showSummary();
                }
            });
        });
    });
}
function signup() {
    var fname = $("#fname").val();
    var lname = $("#lname").val();
    var username = $("#username").val();
    var email = $("#e-mail").val();
    var password = $("#password").val();
    var confirmPass = $("#confirm-password").val();
    var gender = $("#gender").val();
    var bdate = $("#bdate").val();
    var planNum = $("#planNum").val();
    var submitReg = $("#submitReg").val();

    $("#reg-success").load("../php/signup.php", {
        fname: fname,
        lname: lname,
        username: username,
        email: email,
        password: password,
        confirmPass: confirmPass,
        gender: gender,
        bdate: bdate,
        planNum: planNum,
        submitReg: submitReg
    }, function (response) {
        if(response==="You have registered successfully!") {
            document.getElementById('reg-success').style.display = "block";
            document.getElementById('reg-success').innerHTML = response;
            document.getElementById('submitReg').style.display="none";
            setTimeout(function() {
                window.location.replace("../kipper/index.php");
            }, 1000);
            clearFields();
        }
    });
}
function clearFields() {
    document.getElementById('fname').value='';
    document.getElementById('lname').value='';
    document.getElementById('e-mail').value='';
    document.getElementById('password').value='';
    document.getElementById('confirm-password').value='';
    document.getElementById('gender').value='';
    document.getElementById('bdate').value='';
    document.getElementById('username').value='';
}
function logout() {
    $.post('../php/logout.php', function () {
        location.replace("../kipper/index.php");
    });
}
function choose_plan() {
    $.post('../php/reg_plan.php', function () {
    });
}
function loginRes() {
    $(document).ready(function () {
        $(".login").submit(function (event) {
            event.preventDefault();
            var email_user = $("#email_user").val();
            var password = $("#psw").val();
            var loginBtn = $("#loginBtn").val();
            var remember = "off";
            if (document.getElementById('remember').checked)
                remember = "on";

            $("#res").load("../php/login.php", {
                email_user: email_user,
                password: password,
                remember: remember,
                loginBtn: loginBtn
            },function (response) {
                if(response==""){
                    location.href='index.php';
                }
                else {
                    document.getElementById('res').style.display = "block";
                    document.getElementById('res').innerHTML = response;
                }
            });
        });
    });

    // xmlhttp = new XMLHttpRequest();
    // xmlhttp.onreadystatechange = function() {
    //     if (this.readyState == 4 && this.status == 200) {
    //        document.getElementById('myID').innerHTML=this.responseText;
    //     }
    // };
    // xmlhttp.open("POST", "../login.php", true);
    // xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    // xmlhttp.send("email_user="+email_user+"&psw="+psw);

    // function closeLoginDialog() {
    //     var modal = document.getElementsByClassName('table-wrapper');
    //     // When the user clicks anywhere outside of the modal, close it
    //     window.onclick = function (event) {
    //         if (event.target === modal) {
    //             modal.style.display = "none";
    //         }
    //     }
    // }
}
function openEdit(){
    document.getElementById('edit').style.display="none";
    document.getElementById('submit-edit').style.display="block";
    document.getElementById('fname').setAttribute('contenteditable','true');

    var fname = document.createElement('input');
    fname.type='text';
    fname.style.width='100%';
    fname.style.height='30px';
    fname.placeholder='First Name';
    fname.style.fontSize='14pt';
    fname.value=document.getElementById('fname').innerHTML;

    var lname = document.createElement('input');
    lname.type='text';
    lname.style.width='100%';
    lname.style.height='30px';
    lname.placeholder='Last Name';
    lname.style.fontSize='14pt';
    lname.value=document.getElementById('lname').innerHTML;

    var gender = document.createElement('select');
    gender.style.height='30px';
    gender.style.width='100%';
    gender.style.marginBottom='10px';

    var option1 = document.createElement('option');
    option1.text='-';
    option1.value='';

    var option2 = document.createElement('option');
    option2.text='Male';
    option2.value='Male';

    var option3 = document.createElement('option');
    option3.text='Female';
    option3.value='Female';

    var option4 = document.createElement('option');
    option4.text='Prefer not to say';
    option4.value='Prefer not to say';

    gender.add(option1);
    gender.add(option2);
    gender.add(option3);
    gender.add(option4);
    gender.value = document.getElementById('gender').innerHTML;

    var bdate = document.createElement('input');
    bdate.type='date';
    bdate.style.width='100%';
    bdate.style.height='30px';
    bdate.style.marginBottom='10px';

    var mobileNum = document.createElement('input');
    mobileNum.type='number';
    mobileNum.style.width='100%';
    mobileNum.style.height='30px';
    mobileNum.style.marginBottom='10px';
    mobileNum.value=document.getElementById('mobileNum').innerHTML;

    document.getElementById('name').replaceChild(fname,document.getElementById('fname'));
    document.getElementById('name').replaceChild(lname,document.getElementById('lname'));
    document.getElementById('prof-card-1').replaceChild(gender,document.getElementById('gender'));
    document.getElementById('prof-card-1').replaceChild(bdate,document.getElementById('bdate'));
    document.getElementById('prof-card-1').replaceChild(mobileNum,document.getElementById('mobileNum'));
}
function closeEdit(){
    document.getElementById('edit').style.display="block";
    document.getElementById('submit-edit').style.display="none";
}

