<?php
session_start();
    include('config/connection.php');

    if (isset($_POST["login"])) {
        $username = mysqli_real_escape_string($conn, trim($_POST['username']));
        $password = trim($_POST['password']);
    
        if (empty($username) && empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 150px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter both username and password.</p>';
        } elseif (empty($username)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your username.</p>';
        } elseif (empty($password)) {
            $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 240px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please enter your password.</p>';
        } else {

              // Default admin credentials
        $default_admin_username = "admin";
        $default_admin_password = "password";

        if ($username === $default_admin_username && $password === $default_admin_password) {
            // Default admin credentials matched, redirect to admin panel
            $_SESSION['username'] = $username;
            header("Location: admin/main.php");
            exit();

        } else {

            // Process login non-empty username and password
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND role = 'administrator'");
            $count = mysqli_num_rows($sql);
    
            // if ($count > 0) {
            //     $fetch = mysqli_fetch_assoc($sql);
            //     $hashpassword = $fetch["password"];
    
            //     if ($fetch["status"] == 0) {
            //         $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
            //     } elseif (password_verify($password, $hashpassword)) {
            //         $_SESSION['username'] = $username;
            //         header("Location: admin/main.php");
            //         exit();
            //     } else {
            //         $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
            //     }
            // } else {
                $sql1 = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND role = 'user'");
                $count1 = mysqli_num_rows($sql1);
    
                if ($count1 > 0) {
                    $fetch1 = mysqli_fetch_assoc($sql1);
                    $hashpassword1 = $fetch1["password"];
    
                    if ($fetch1["status"] == 0) {
                        $login_error = '<p style="text-align: center; color: #FF0000; margin-right: 100px; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Please verify your email account before logging in.</p>';
                    } elseif (password_verify($password, $hashpassword1)) {
                        $_SESSION['username'] = $username;
                        echo '<script> alert("Login Successfully");
                        window.location.href = "home.php";
                        </script>';
                        exit();
                    } else {
                        $login_error = '<p style="text-align: center; margin-right: 110px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Invalid username or password, please try again.</p>';
                    }
                } else {
                    $login_error = '<p style="text-align: center; margin-right: 253px; color: #FF0000; font-size: 16px;"><i class="fas fa-exclamation-circle"></i> Username does not exist.</p>';
                }
            }
        }
     }  

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Payris FunOlympic 2024</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="icon" href="images/logo.jpg">

<style>
    
    body {
    margin: 0;
    padding: 0;
    background-color: pink;
    font-family: Arial, sans-serif;
}

.navbar {
    background-color: pink;
    color: white;
    font-size: 20px;
    margin-top: 0px;

}
.navbar-brand {
    color: white;
}

.navbar-nav {
    margin-right: 15px;
}
.container-login100 {
    display: flex;
   flex-direction: column;
    align-items: center;
    min-height: 100vh;
    background-color: paleturquoise;
}
.wrap-login100 {
    width: 100%;
    max-width: 600px;
    padding: 20px;
    margin-top: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: white;
}
.login100-form-title {
    color: #008374;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
}
.input100 {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.login100-form-btn {
    width: 100%;
    padding: 10px;
    background-color: #008374;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.social-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
}

.social-icon {
    margin: 0 7px;
    color: white;
}

.txt1 {
    text-align: center;
    margin-top: 15px;
    color: #008374;
}

.txt2 {
    color: #008374;
    font-weight: bold;
}

.text-right a {
    color: red;
    text-decoration: none;
}

.text-right a:hover {
    text-decoration: underline;
    background-color: greenyellow;
}
.input-box {
    margin-top: 20px;
    position: relative;
}

.details {
    font-size: 16px;
    color: #333;
}

#captcha-image {
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

#captcha {
    margin-top: 10px;
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}

#captcha-image {
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}
 .login100-form-btn:hover {
        background-color: red;
        color: #008374; 
        cursor: pointer;
      
    }
    button:hover {
  opacity: 0.8;
  background-color: greenyellow
}






</style>

<!-- Add this script at the end of your HTML body -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.forms["login"].addEventListener("submit", function (event) {
            var captchaInput = document.getElementById("captcha");
            var captchaValue = captchaInput.value.trim();

            if (captchaValue === "") {
                alert("Please enter the captcha.");
                event.preventDefault();
                return;
            }

            var captchaVerificationURL = "captcha_verify.php?vercode=" + encodeURIComponent(captchaValue);

            var xhr = new XMLHttpRequest();
            xhr.open("GET", captchaVerificationURL, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var response = xhr.responseText;

                    if (response === "success") {
                        // Captcha is correct, proceed with form submission
                        alert("Login Successful");
                    } else {
                        // Captcha is incorrect, prevent form submission
                        alert("Incorrect Captcha. Please try again.");
                        event.preventDefault();
                    }
                }
            };

            xhr.send();

        });
    });
    
</script>

    
    </head>
    <body>
        <!-- navbar -->

        <!-- navbar start -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
        <span></span>

		<div class="navbar-header">
        <img src="images/olyampic logo.png" alt="logo" width="50" height="auto" class="rounded-circle">

			<a class="navbar-brand" href="index.php" >Login to  Payris FunOlyampics2024</a>
		</div>
		<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="login.php"><i class="bi bi-person"></i>Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="register.php"><i class="bi bi-person-plus-fill"></i>Signup</a>
  </li>
	</div>
	</div>	
	</nav>

<!-- login form starts -->

        <div class="limiter">
            <div class="container-login100" style="background-image:url('images/login.jpg') ;"   data-aos="fade-up-left">
                <div class="wrap-login100">
                    <form action="#" method="POST" name="login">
                        <form class="login100-form validate-form">
                            <span class="login100-form-title p-b-30" style="color: #008374; text-align:center;">
                                Login
                                <p style="font-size: 12px; text-align:center;color:black;">please enter the valid username to watch live Videos</p>
                            </span>

                            <div class="wrap-input100 validate-input m-b-20" data-validate="Username is required">
                                <span class="label-input100" style="font-weight: bold;">Username *</span>
                                <input class="input100" id="username" type="text" name="username"required
                                    placeholder="Type your username">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input" data-validate="Password is required">
                                <span class="label-input100" style="font-weight: bold;">Password *</span>
                                <input class="input100" id="password" type="password" name="password" 
                                    placeholder="Type your password"   required >
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>

                            <div class="input-box">
                           <span class="details" style="font-weight: bold;">Enter Captcha *</span>
                           <br/>
                        <img id="captcha-image" src="captcha.php" alt="CAPTCHA" width="30%" ><br/>
                        <input id="captcha" type="text" placeholder="Enter Captcha" name="vercode" required>
                         </div>
                         <br>

                            <?php if (isset($login_error)) echo $login_error; ?>

                            <div class="text-right p-t-10 p-b-25">
                                <a href="recoverpassword.php">
                                    Forgot password?
                                </a>
                            </div>
                            <br>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" name="login">
                                        <strong>Login</strong>
                                    </button>
                                    <label>
                                <input type="checkbox" checked="checked" name="remember" style="margin-top:10px;"> Remember me
                                  </label>
                                </div>
                                <button type="button" class="cancelbtn" style="margin-top: 10px;   padding: 0px 10px; background-color:antiquewhite">Cancel</button>

                            </div>

                            <div class="txt1 text-center" style="padding: 10px;">
                                <span>
                                  Or
                                </span>
                            </div>

                        <div class="form-group submit-btn" class="social-icons"
                            style="background-color:coral; color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
                        <span style="margin: 0 10px;"></span>
                        <a href="https://www.facebook.com/home.php" class="social-icon facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-318657203%3A1687110829899402&continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&ifkv=Af_xneFDlV9ueGO5rZsG3qxeFwlpq7fSu5-bXZ0_Bc7o7vtqBhGBhZ42smZseGSEbbnU6MdCvzi_Yg&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="social-icon google"><i class="fab fa-google"></i></a>
                    </div>

                            <div class="flex-col-c p-t-15">
                                <span class="txt1">
                                    Not a Member?
                                    <a href="register.php" class="txt2">
                                        REGISTER
                                    </a>

                                </span>
                            </div>
                        </form>
                </div>
            </div>
        </div>

    </body>

    </html>