<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Payris FunOlympic 2024</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="images/logo.jpg" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 

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
   

    <section id="portfolio" class="portfolio sections-bg">
        <div class="container"  data-aos="fade-down-left">

            <div class="section-header" data-aos="fade-down-right">
                <h2><strong>SPORTS</strong></h2> 
                <p>"The only way to prove that you're a good sport is to lose"</p>
            </div>

            <?php
          $dir=glob('images/games/{*.jpg, *.png, *.jpeg}',GLOB_BRACE);
          foreach($dir as $value)
          {
          ?>
            <a href="<?php echo $value; ?>">
                <img id="myImg" src="<?php echo $value; ?>" alt="HNP" width="410px" height="300px" hspace="8px"
                    vspace="2px" class="thumbnail" style="border-radius: 10px;">

            </a>
            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>
            <?php 
          }
          ?>
            <br><br><br>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order" data-aos="fade-left">

                <div>
                    <ul class="portfolio-flters" data-aos="flip-left">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Badminton</li>
                        <li data-filter=".filter-product">Football</li>
                        <li data-filter=".filter-branding">Judo</li>
                        <li data-filter=".filter-books">Swimming</li>
                    </ul>
                    <!-- End Sports Filters -->
                </div>

                <div class="row gy-4 portfolio-container" data-aos="flip-left">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app" data-aos="flip-left">
                        <div class="portfolio-wrap">
                            <a href="assets/img/sports/1.webp" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/badminton.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 1</a></h4>
                                <p>"Rackets ready, spirits high, let the fast-paced rallies of Olympic badminton
                                    leave you breathless and begging for more!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product"data-aos="flip-right">
                        <div class="portfolio-wrap">
                            <a href="images/games/football.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/football.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 1</a></h4>
                                <p>"Football is a game of passion, unity, and the relentless pursuit of victory. Let
                                    the Yokyo FunOlympic 2023 ignite the spirit of the beautiful game!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding" data-aos="flip-right">
                        <div class="portfolio-wrap">
                            <a href="images/games/judo.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/judo.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 1</a></h4>
                                <p>"Judo is not just about winning medals; it's about the discipline, respect, and
                                    camaraderie forged on and off the mat."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books" data-aos="flip-down">
                        <div class="portfolio-wrap">
                            <a href="images/games/swimming.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/swimming.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 1</a></h4>
                                <p>"Swimming teaches us that the only limit is the one we set for ourselves. Break
                                    free and glide towards greatness."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app"  data-aos="flip-down">
                        <div class="portfolio-wrap">
                            <a href="images/games/badminton2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/badminton2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 2</a></h4>
                                <p>"Step onto the court in Payris and let the shuttlecock be your wings as you dance
                                    with skill and finesse!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product"data-aos="zoom-in">
                        <div class="portfolio-wrap">
                            <a href="images/games/football2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/football2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 2</a></h4>
                                <p>"The beauty of football lies in its simplicity, where a single moment can change
                                    the course of an entire match."r</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding"data-aos="zoom-in">
                        <div class="portfolio-wrap">
                            <a href="images/games/judo2.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/judo2.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 2</a></h4>
                                <p>"Judo is like a chess match on the tatami, where each move is strategic and every
                                    decision counts."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books"data-aos="zoom-in">
                        <div class="portfolio-wrap">
                            <a href="images/games/swimming.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/11.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 2</a></h4>
                                <p>"Swimming is not just a sport; it's a way of life, where dedication and
                                    perseverance flow in every lane."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app" data-aos="zoom-in">
                        <div class="portfolio-wrap">
                            <a href="images/games/badminton.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="assets/img/sports/3.webp" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Badminton 3</a></h4>
                                <p>"Smash, spin, and shuttle your way to glory in the electrifying world of Olympic
                                    badminton!"</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product" data-aos="zoom-in">
                        <div class="portfolio-wrap">
                            <a href="images/games/football.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/football.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Football 3</a></h4>
                                <p>"A football team is not just a collection of players; it's a symphony of
                                    coordinated effort, where each instrument plays a vital role."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding" data-aos="fade-left">
                        <div class="portfolio-wrap">
                            <a href="images/games/judo.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/judo.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Judo 3</a></h4>
                                <p>"The true essence of Judo lies in the journey of self-improvement, as you strive
                                    to be stronger, faster, and better than before."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-books"data-aos="fade-left">
                        <div class="portfolio-wrap">
                            <a href="images/games/swimming.jpg" data-gallery="portfolio-gallery-app"
                                class="glightbox"><img src="images/games/swimming.jpg" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="sports.php" title="More Details">Swimming 3</a></h4>
                                <p>"Swimming is the perfect blend of power and elegance, where the water becomes a
                                    playground and athletes become aquatic marvels."</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Sports Item -->

                </div>
                <!-- End Sports Container -->

            </div>

        </div>
    </section>
    <!-- footer section begins -->
    <footer class="site-footer border-top">
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
        &copy; 2024 Copyright <strong><span> payris <a href="home.php">FunOlympic 2024</a></span></strong>. All Rights Reserved
    </div>
    <!-- End Sports Section -->
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>


</body>
</html>