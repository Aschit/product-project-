<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:admin/index.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> payris FunOlympic2024</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
        body {
        background-color: pink;
    }

    .container-login100 {
        background-color: #fff;
        padding: 10px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            margin: 50px auto;
            max-width: 600px;
    }

    .form-group {
        margin-bottom: 12px;
    }

    .input-container {
        position: relative;
    }

    .input-container i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -25px;
    }

    .footer {
            background-color: #f8f9fa;
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
        .footer-contact p {
            font-size: 14px;
        }

        .copyright {
            font-size: 14px;
            color: #333;
            margin-bottom: 10px;
        }

        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            display: none;
            font-size: 24px;
            color: #333;
            background-color: #fff;
            border: 1px solid #333;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .scroll-top:hover {
            background-color: #333;
            color: #fff;
        }
     

    </style>

        


    
</head>

<body>
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="home.php" class="logo d-flex align-items-center">
                <h1> payris OLyampics<span>.</span></h1>
              
            

    <body>
        <!-- profile -->
        <div class="limiter">
            <div class="container-login100" style="background-color: #DCDCDC;">
                <div class="mr-3 mt-3" style="display: flex; justify-content: center; align-items: center;">
                    <img src="images/dashboard/user.jpg" alt="user" class="mr-3 mt-3 rounded-circle"
                        style="width:200px; margin-left: 90px;">
                </div>
                <br>
                <div class="media-body" style="margin-left: 20px; text-align: center;">
                    <h1 style="text-transform:capitalize;" class="display-8"><?php echo $_SESSION['username']; ?><br>
                    </h1>
                    <p>Full Name: Bishal Dhakal</p>
                    <p>Email: BishalDhakal@ismt.edu.np</p>
                    <p>Phone Number: 123456789</p>
                    <p>Country: Nepal</p>
                    <p>Gender: Male</p>
                </div>
                <a href="logout.php" >logout</a>
            </div>
        </div>
    </body>
</body>

<footer id="footer" class="footer">
<div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        Payris <br> City of Payris, 1<br> Paris <br><br>
                        <strong>Phone:</strong> +1-123-456-7899<br>
                        <strong>Email:</strong> info@FunOlympic2024.com<br>
                    </p>

                </div>

        <div class="container mt-4">
            <div class="copyright">
                &copy; 2024 Copyright <strong><span>FunOlympic2024 Payris</span></strong>. All Rights Reserved
            </div>

          

</html>
<?php 
}
?>