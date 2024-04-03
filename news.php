<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Payris Fun olyampic 2024</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy3pXzL7Adw+3gEmS5p5em/hfN5cmh1w5" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="icon" href="images/logo.jpg">



  </head>
  <body>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script>

  AOS.init({
  offset:300,
  duration:1300,
  }
  );
    </script>

    <div class="site-blocks-cover overlay" style="background-image: url(images/news/news0.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left">
            <h1 class="bg-text-line" data-aos="fade-up">News</h1>
            <p class="mt-4"><a href="home.php">Stay connected with us for the latest updates and news about the Payris FunOlympic 2024.
                    Join the conversation using #PayrisFunOlympic2024.</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section" data-aos="fade-left">
      <div class="container" >
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="post-entry">
              <div class="image" data-aos="fade-up-right">
                <img src="images/news/news1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="https://www.realmadrid.com/en-US">RealMad vs Striker Who Will Win?</a></h2>

                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up-left">
            <div class="post-entry">
              <div class="image">
                <img src="images/news/news2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">Brazil vs America Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> &bullet; Sep 25, 2023</small></span>
                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-down-left">
            <div class="post-entry">
              <div class="image">
                <img src="images/news/news3.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4" data-aos="fade-down-left">
                <h2 class="h5 text-black"><a href="https://olympics.com/en/news/fih-junior-men-world-cup-hockey-2023-india-vs-canada-result-scores">canada vs India Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> &bullet; november 25, 2023</small></span>
                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-down-left">
            <div class="post-entry">
              <div class="image">
                <img src="images/news/news4.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4" data-aos="fade-down-left">
                <h2 class="h5 text-black"><a href="#">Nepal vs India Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-down-left">
            <div class="post-entry">
              <div class="image">
                <img src="images/news/news5.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4" data-aos="fade-down-left">
                <h2 class="h5 text-black"><a href="#">India vs Japan Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-down-left">
            <div class="post-entry">
              <div class="image">
                <img src="images/news/news6.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4" data-aos="fade-down-left">
                <h2 class="h5 text-black"><a href="#">China vs Australia Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small> &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">"We arrive in an unbeatable situation to be able to fight for a goal as ambitious as the League. For us this is a dream, being able to live and compete for the top positions in the League is spectacular. </p>
              </div>
            </div>
  </div>

<!-- footer -->
<footer class="site-footer border-top"  data-aos="fade-down-left">
    <div>
            <h4 style="text-align: center;">Contact Us</h4>
            <p>Stay connected with us for the latest updates and news about the Payris FunOlympic 2024. 

            <p>
                              <strong>Phone:</strong> +1-123-456-7899<br>
                <strong>Email:</strong> info@payris-funolympic.com<br>
            </p>
        </div>

    </div>
</div>
<div class="social-links" style="text-align:center; padding:10px;margin:10px">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

<div class="container mt-4">
    <div class="copyright" style="text-align: center;">
        &copy; 2024 Copyright <strong><span> payris FunOlympic 2024</span></strong>. All Rights Reserved
    </div>

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
             <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

  
  </body>
</html>