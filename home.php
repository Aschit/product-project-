<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympic Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <script src="js/animate.js"></script>



<style>
.nav-link {
    padding-right: 950px;
}
navbar-nav li a[href="profile.php"] {
    color: #fff; 
    padding: 10px 20px;
    margin: 50px;
    border-radius: 5px;
    transition: background-color 0.3s ease; 
} 
</style>

</head>

<body>
    <!-- navbar starts --> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img src="images/logo.jpg"  alt="logo" width="50" height="auto" class="rounded-circle">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link" href="about.php">About</a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="broadcast.php">Live</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           More
          </a>
          
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="News.php">News</a></li>
            <li><a class="dropdown-item" href="sports.php">Sports</li>
            <li><a class="dropdown-item" href="contact.php">Contact</a></li>

          </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="sports.php">sports</a></li>
          <li><a class="dropdown-item" href="login.php">Login</a></li>
            <li><a class="dropdown-item" href="register.php">SignIn</a></li>
            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>
          </ul>
        </li>
      </ul> 
      <a href="profile.php" class="nav-link">User</a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</nav>
    <!-- Carousel Start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <!-- Carousel Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <!-- Carousel Inner -->
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000" >
                <img src="images/highlightgames/home1.jpg" class="d-block w-100" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5> BasketBall TOP olyampic Games</h5>
                    <p>Olympic Games, quadrennial athletic festival that is often regarded as the world's foremost sports competition. The ancient Olympic Games ...</p>
                </div>
            </div>
            <div class="carousel-item"  data-bs-interval="2000">
                <img src="images/highlightgames/home2.jpg" class="d-block w-100" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Sport Swimming</h5>
                    Olympic Games, quadrennial athletic festival that is often regarded as the world's foremost sports competition. The ancient Olympic Games ...                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="images/highlightgames/home3.jpg" class="d-block w-100" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Nice Game</h5>
                    Olympic Games, quadrennial athletic festival that is often regarded as the world's foremost sports competition. The ancient Olympic Games ...                </div>
            </div>
        </div>
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">Live</h6>
                    <h1 class="mb-4">Welcome to the <span class="text-primary text-uppercase">Olympic Live</span></h1>
                    <marquee width="60%" direction="down" height="100px" style="color:#00FF00; font-size:20px;">
                   Tab here to watch live videos..
                   </marquee>
                    <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center" target="_blank"><i class="fa fa-play-circle" aria-hidden="true"
                                style="color: #e60000;font-size: 30px; "></i>
                            <span style="color: #e60000;">LIVE VIDEOS</span></a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <a href="games/boxing.jpg"><img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="games/boxing.jpg" alt=""></a>
                        </div>
                        <div class="col-6 text-start">
                            <a href="games/favicon.png"><img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="games/favicon.png" alt=""></a>
                        </div>
                        <div class="col-6 text-end">
                            <a href="games/youth karate.jpg"><img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="games/youth karate.jpg" alt=""></a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- game section -->
     <!-- ======= Games Section ======= -->
     
                </div>

            </div>
        </section>
        <!-- End Games Section -->

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4 align-items-center">

                    <div class="col-lg-6">
                        <img src="images/games/boxing.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="col-lg-6">

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>SPORTS</strong> variety of sports games lists</p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>ATHLETES</strong> top ranking olympians 2024</p>
                        </div>
                        <!-- End Stats Item -->

                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>LIVE EVENTS</strong> watch latest live olympic videos </p>
                        </div>
                        <!-- End Stats Item -->

                    </div>

                </div>

            </div>
        </section>
        <!-- End Stats Counter Section -->

        <!-- ======= Explore the games Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://www.youtube.com/watch?v=zBeyzFMGtwQ" class="glightbox play-btn"></a>
                <!-- <h3>FunOlympic 2023</h3> -->
                <p> Let’s Move: An Olympic Invite to get the world moving!</p>
                <a class="cta-btn" href="https://www.youtube.com/watch?v=zBeyzFMGtwQ">Explore the games</a>
            </div>
        </section>
        <!-- End Explore the gamesn Section -->

        <!-- ======= Latest News Section ======= -->
        <section id="services" class="services sections-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>LATEST NEWS</h2>
                    <p>"Stay updated with payris FunOlympic Games 2024!"</p>
                </div>
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="100">
                    <?php
            include 'config/connection.php';
            $query = "SELECT * FROM posts ORDER BY RAND() LIMIT 10";
            $run = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['title'];
                $c = $row['content'];
                $d = $row['image'];
                ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item position-relative">

                            <div class="image-container">
                                <img src="images/news/?php echo $d; ?>" alt="Your Image" height="230" width="350"
                                    style="padding: 15px;">
                            </div>
                            <strong><?php echo $b; ?></strong>
                            <p><?php echo substr($c, 0, 100); ?> ......</p>
                            <a href="news.php?id=<?php echo $a; ?>" class="readmore stretched-link">Read More<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <?php
            }
            ?>
                </div>
            </div>
        </section>
        <!-- End Our Latest News Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>TESTIMONIALS</h2>
                    <p>"What Our Clients Say!!"</p>
                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/testimonials/testimonials2.jpg.crdownload"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Saul Goodman</h3>
                                            <h4>Sports Enthusiasts</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "The Payris FunOlympic 2024 website
                                        was a treasure trove of inspiration.
                                        The athlete profiles and their stories showcased their journeys, struggles, and
                                        triumphs. It made me appreciate the incredible dedication and perseverance of
                                        these athletes. The website truly captured the essence of the games and left me
                                        feeling inspired to pursue my own dreams."
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/testimonials/testimonial-3.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Sara Wilsson</h3>
                                            <h4>Volunteers</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "I want to express my gratitude to
                                        the organizers for making the payris FunOlympic 2024 website accessible and
                                        inclusive.
                                        The website was designed with accessibility features, ensuring that people of
                                        all abilities could fully engage with the content. It's a testament to the
                                        commitment of creating an inclusive and empowering experience for everyone
                                        involved. Well done!"
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/testimonials/testimonials-4.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>Jena Karlis</h3>
                                            <h4>Sports Enthusiasts</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "I have to commend the organizers
                                        for their outstanding job with the payris FunOlympic 2024 website.
                                        It was visually stunning and packed with engaging content. The live streaming
                                        feature allowed me to catch the action in real-time, even when I couldn't be
                                        physically present at the venue. It truly brought the spirit of the FunOlympics
                                        to life!"
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                  
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <div class="d-flex align-items-center">
                                        <img src="images/testimonials/download.jpg"
                                            class="testimonial-img flex-shrink-0" alt="">
                                        <div>
                                            <h3>John Larson</h3>
                                            <h4>Sports Enthusiast</h4>
                                            <div class="stars">
                                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                                    class="bi bi-star-fill"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i> "As a sports enthusiast, I couldn't
                                        be happier with the payris FunOlympic 2024 website.
                                        It was a one-stop destination for everything related to the event. From the
                                        schedule of competitions to the profiles of athletes, I had access to all the
                                        details I needed. The website truly enhanced my experience and made me feel
                                        connected to the games in a unique way."
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Sports Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>SPORTS</h2>
                    <p>"The only way to prove that you're a good sport is to lose"</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div>
                        <ul class="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Badminton</li>
                            <li data-filter=".filter-product">Football</li>
                            <li data-filter=".filter-branding">Judo</li>
                            <li data-filter=".filter-books">Swimming</li>
                        </ul>
                        <!-- End Sports Filters -->
                    </div>

                    <div class="row gy-4 portfolio-container">

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="images/games/badminton.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/badminton.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Badminton 1</a></h4>
                                    <p>"Rackets ready, spirits high, let the fast-paced rallies of Olympic badminton
                                        leave you breathless and begging for more!"</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
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

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
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

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
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

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="images/games/badminton.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/badminton.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Badminton 2</a></h4>
                                    <p>"Step onto the court in Yokyo and let the shuttlecock be your wings as you dance
                                        with skill and finesse!"</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="images/games/football.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/football.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Football 2</a></h4>
                                    <p>"The beauty of football lies in its simplicity, where a single moment can change
                                        the course of an entire match."r</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
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

                        <div class="col-xl-4 col-md-6 portfolio-item filter-books">
                            <div class="portfolio-wrap">
                                <a href="images/games/swimming.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/swimming.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Swimming 2</a></h4>
                                    <p>"Swimming is not just a sport; it's a way of life, where dedication and
                                        perseverance flow in every lane."</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="images/games/badminton.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/badminton.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Badminton 3</a></h4>
                                    <p>"Smash, spin, and shuttle your way to glory in the electrifying world of Olympic
                                        badminton!"</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="images/games/football2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/football2.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Football 3</a></h4>
                                    <p>"A football team is not just a collection of players; it's a symphony of
                                        coordinated effort, where each instrument plays a vital role."</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="images/games/judo2.jpg" data-gallery="portfolio-gallery-app"
                                    class="glightbox"><img src="images/games/judo2.jpg" class="img-fluid" alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="sports.php" title="More Details">Judo 3</a></h4>
                                    <p>"The true essence of Judo lies in the journey of self-improvement, as you strive
                                        to be stronger, faster, and better than before."</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Sports Item -->

                    </div>
                    <!-- End Sports Container -->

                </div>

            </div>
        </section>
        <!-- End Sports Section -->

        <!-- ======= Our Athelete Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>MEET THE ATHLETES</h2>
                    <p>"Top Ranking Olympians 2024"</p>
                </div>

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <img src="images/testimonials/neeraj.webp" class="img-fluid" alt="">
                            <h4><a href="sports.php" title="More Details">Neeraj Chopra</a></h4>
                            <span>Indian track and field athlete</span>
                            <div class="social">
                                <a href="https://twitter.com/Neeraj_chopra1"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/neerajchopra01/"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/neeraj____chopra/?hl=en"><i
                                        class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Athelete Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="member">
                            <img src="images/testimonials/runner.webp" class="img-fluid" alt="">
                            <h4><a href="sports.php" title="More Details">Usain Bolt</a></h4>
                            <span>Jamaican runner</span>
                            <div class="social">
                                <a href="https://twitter.com/usainbolt"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/usainbolt/"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/usainbolt/?hl=en"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Athelete Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="member">
                            <img src="images/testimonials/suimmer.jpg" class="img-fluid" alt="">
                            <h4><a href="sports.php" title="More Details">Sunisa Lee</a></h4>
                            <span>American gymnast</span>
                            <div class="social">
                                <a href="https://twitter.com/sunisalee_?lang=en"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/SunisaLee/"><i class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/sunisalee/?hl=en"><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Athelete Member -->

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="member">
                            <img src="images/testimonials/skate.webp" class="img-fluid" alt="">
                            <h4><a href="sports.php" title="More Details">Yuto Horigome</a></h4>
                            <span>Japanese skateboarder</span>
                            <div class="social">
                                <a href="https://twitter.com/yutohorigome?lang=en"><i class="bi bi-twitter"></i></a>
                                <a href="https://www.facebook.com/yutohorigome8/about/"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://www.instagram.com/yutohorigome/?hl=en"><i
                                        class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Athelete Member -->

                </div>

            </div>
        </section>
        <!-- End Our Athelete Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>CONTACT US</h2>
                    <p>Thank you for your interest in the Payris FunOlympic 2024! We value your feedback, inquiries, and
                        suggestions. Please feel free to reach out to us using the following contact information:</p>
                </div>

                <div class="row gx-lg-0 gy-4">

                    <div class="col-lg-4">

                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Location:</h4>
                                    <p>Payris</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h4>Email:</h4>
                                    <p>info@payris-funolympic2024.com</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Call:</h4>
                                    <p>+1-123-456-7899</p>
                                </div>
                            </div>
                            <!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Open Hours:</h4>
                                    <p>Mon-Friday: 11AM - 23PM</p>
                                </div>
                            </div>
                            <!-- End Info Item -->
                        </div>

                    </div>

                    <div class="col-lg-8">
                        <form action="contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="7" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message"> Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                    <!-- End Contact Form -->

                </div>

            </div>
        </section>
        <!-- End Contact Section -->


    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    


    <!-- Custom JavaScript for the back-to-top button -->
    <script>
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.querySelector('.back-to-top').style.display = 'block';
            } else {
                document.querySelector('.back-to-top').style.display = 'none';
            }
        }

        document.querySelector('.back-to-top').addEventListener('click', function () {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        });
    </script>
            
      </div>
                </div>
            </div>
        </div>
    </section>
    </body>

</html>

