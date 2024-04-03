<?php session_start(); ?>
<?php
    include('config/connection.php');

    if(isset($_POST["register"])){
        $fullname = $_POST["fullname"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $country = $_POST["country"];
        $sports = $_POST["sports"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        $check_query = mysqli_query($conn, "SELECT * FROM users where email ='$email'");
        $rowCount = mysqli_num_rows($check_query);

        if(!empty($email) && !empty($password)){
            if($rowCount > 0){
                ?>
<script>
alert("User with email already exist!");
</script>
<?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO users (fullname, username, email, phone_number, country, sports, password, role, status) VALUES
                ('$fullname','$username', '$email','$phone_number', '$country', '$sports', '$password_hash', '$role', 0)");
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                      
                   $mail->Username='aschitdhakal@gmail.com';
                   $mail->Password='dhcd uqkx wxvi vlya';
    
                    $mail->setFrom('aschitdhakal@gmail.com', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>
                    <br><br>
                    <p>With regrads,</p>";
    
                            if(!$mail->send()){
                                ?>
<script>
alert("<?php echo "Register Failed, Invalid Email "?>");
</script>
<?php
                            }else{
                                ?>
<script>
alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
window.location.replace('verification.php');
</script>
<?php
                            }
                }
            }
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


<!-- js function -->
<script src="js/main.js"></script>
<link rel="icon" href="images/logo.jpg">


<link rel="stylesheet" href="css/register.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Register</title>



</head>
<body>
<div id="toast" class="toast hide">Please fill all the form fields!</div>


    <!-- header section begins --> 
    <div class="limiter">
        <div class="container-login100" style="background-image:url('images/signup.jpg'); ">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: 	#d1c1a5; padding: 60px 80px;">
                <h3 style="margin-top: -10px; text-align: center; color: #008374; font-family: Arial, sans-serif;">
                    <strong>Create Account with  Payris FunOlympic 2024</strong>
                </h3>
                <p style="text-align: center; color: #808080;"><i class="bi bi-person-plus-fill"></i>Signup to explore videos !!</p><br>
                <form action="#" method="POST" name="register">
                    <div class="form-group" style="color: #808080;">
                        <label for="fullname"><strong>Full Name *</strong></label>
                        <div class="input-container">
                            <input type="text" id="fullname" placeholder="Enter your fullname" name="fullname" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>

                    <div class="form-group" style="color: #808080;">
                        <label for="username"><strong>Username *</strong></label>
                        <div class="input-container">
                           
                            <input type="text" id="username" placeholder="Enter your username" name="username" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="email_address"><strong>Email *</strong></label>
                        <div class="input-container">
                            <input type="email" id="email_address" placeholder="E-mail (example@gmail.com)" name="email"
                                required style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="phone_number"><strong>Phone Number *</strong></label>
                        <div class="input-container">
                            <input type="text" id="phone_number" placeholder="Enter Phone Number" name="phone_number"
                                required style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                        </div>
                    </div>
                  
                    <div class="form-group" style="color: #808080;">
                        <label for="country"><strong>Country:</strong></label>
                        <div class="input-container">
                            <select id="country" name="country" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select your Country</option>
                                <option value="Nepal">Nepal</option>
                                <option value="United States">United States (USA)</option>
                                <option value="United Kingdom">United Kingdom (UK)</option>
                                <option value="India">India</option>
                                <option value="China">China</option>
                                <option value="Japan">Japan</option>
                                <option value="Korea">newzealand</option>
                                <option value="Vietnam">Netherland</option>
                                <option value="Indonesia">Indonesia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="sports"><strong>Sports *</strong></label>
                        <div class="input-container">
                            <select id="sports" name="sports" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select your Favorate Sports</option>
                                <option value="football">Football</option>
                                <option value="volleyball">Volleyball</option>
                                <option value="basketball">Basketball</option>
                                <option value="swimming">swimming</option>
                                <option value="hockey">Hockey</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="password"><strong>Password *</strong></label>
                        <div class="input-container">
                            <input type="password" id="password" placeholder="Password" name="password" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px;"
                                onkeyup="validatePassword()"oninput="checkpasswordmatch()">
                                <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>
        
                        </div>

                        <div class="form-group" style="color: #808080;">
                        <label for="password"><strong> Confirm Password *</strong></label>
                        <div class="input-container">
                            <input type="password" id="confirm_password" placeholder="Confirm Password"name="confirm_password" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px;"
                                onkeyup="validatePassword()" oninput="checkpasswordmatch()">
                                <span class="toggle-password" onclick="togglePassword('password')">&#x1F441;</span>

                        </div>
                        <div id="error-message" style="margin-top:5px;"></div>
                        <div class="password-match" id="password-match"></div>
                    </div>
                    <div class="form-group" style="color: #808080;">
                        <label for="usertype"><strong>User Type:</strong></label>
                        <div class="input-container">
                            <select id="usertype" name="role" required
                                style="width: 100%; height: 40px; margin-top: 5px; padding: 5px">
                                <option value="" selected disabled>Select</option>
                                <!-- <option value="administrator">Admin</option> -->
                                <option value="user">User</option>
                            </select>
        </div>
        </div>
        <div class="form-group" style="color: #808080; font-size:20px; color:brown;">
    <input type="checkbox" id="terms_condition" name="terms_condition"required>
    <label for="terms_condition">I agree to the Terms and Conditions</a></label>
</div>

                    <div class="form-group submit-btn" class="social-icons">
                        <input type="submit" value="SignUp" name="register"
                            style="background-color: #008374; color: white; padding: 10px 20px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;"
                            
                            onmouseover="this.style.backgroundColor='#FF0000';"
                             onmouseout="this.style.backgroundColor='	#837400';">
                        <span style="margin: 0 10px;">Or</span>
                        <a href="https://www.facebook.com/home.php" class="social-icon facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/i/flow/login" class="social-icon twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S-318657203%3A1687110829899402&continue=https%3A%2F%2Fmyaccount.google.com%3Futm_source%3Daccount-marketing-page%26utm_medium%3Dgo-to-account-button&ifkv=Af_xneFDlV9ueGO5rZsG3qxeFwlpq7fSu5-bXZ0_Bc7o7vtqBhGBhZ42smZseGSEbbnU6MdCvzi_Yg&service=accountsettings&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                            class="social-icon google"><i class="fab fa-google"></i></a>
                    </div>

                    <div class="already-have-account" style="font-weight: bold; font-size:25px;color:brown">
                        <p>Already have an account? <a href="login.php" style="color:red">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    
    
</body>
</html>



             