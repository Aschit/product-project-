<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Olympic Website</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" href="css/loader.css">
  <script src="js/loader.js"></script>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="icon" href="images/logo.jpg">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
  <div class="loader"></div>

  <!-- navbar starts -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <img src="images/logo.jpg" alt="logo" width="50" height="auto" class="rounded-circle">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="login.php">Login</li>
              <li><a class="dropdown-item" href="register.php">SignIn</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
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
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="images/slide1.jpg" class="d-block w-100" alt="First Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>"Ignite the Spirit: Welcome to Fun Olympic 2024!"</h5>
          <p>The elevation of the mind and soul, overcoming differences between nationalities and cultures, embracing friendship, a sense of solidarity, and fair play; ultimately leading to the contribution towards world peace and the betterment of the world..</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="images/slide2.jpg" class="d-block w-100" alt="Second Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>"Ignite the Spirit: Welcome to Fun Olympic 2024!"</h5>
          <p>The elevation of the mind and soul, overcoming differences between nationalities and cultures, embracing friendship, a sense of solidarity, and fair play; ultimately leading to the contribution towards world peace and the betterment of the world..</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="10000">
        <img src="images/slide3.jpg" class="d-block w-100" alt="Third Slide">
        <div class="carousel-caption d-none d-md-block">
          <h5>"Ignite the Spirit: Welcome to Fun Olympic 2024!"</h5>
          <p>The elevation of the mind and soul, overcoming differences between nationalities and cultures, embracing friendship, a sense of solidarity, and fair play; ultimately leading to the contribution towards world peace and the betterment of the world..</p>
        </div>
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
        <div class="col-lg-6" data-aos="fade-up">
          <div class="card">
            <h6 class="section-title text-start text-primary text-uppercase">About Us</h6>
            <h1 class="mb-4">Welcome to the <span class="text-primary text-uppercase"> Fun Olympic Sports</span></h1>
            <p class="mb-4">Our mission is to provide a comprehensive and engaging experience for sports enthusiasts and curious minds alike. Whether you're seeking the latest updates on Olympic events, exploring the history of the Games, or discovering the inspiring journeys of athletes from around the globe, you'll find it here. We invite you to join us in celebrating the timeless values of excellence, friendship, and respect that the Olympics embody.</p>
            <a href="login.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Explore More</a>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50">
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

    <!-- Games Section Start -->
    <section class="container-xxl py-5" id="games">
      <div class="container">
        <div class="text-center" data-aos="fade-down-left">
          <h6 class="section-title text-primary text-uppercase">Sports Section</h6>
          <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Sports</span></h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
          <!-- Football -->

          <div class="col" data-aos="flip-left">
            <div class="card" style="width: 18rem; ">
              <img src="images/games/football.jpg" class="card-img-top" alt="Football Image">
              <div class="card-body">
                <h5 class="card-title">Football</h5>
                <p>"Football is a game of passion, unity, and the relentless pursuit of victory. Let
                  the Payris FunOlympic 2024 ignite the spirit of the beautiful game!"</p>
                <a href="login.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          <!-- Basketball -->
          <div class="col " data-aos="fade-up-right">
            <div class="card" style="width: 18rem; ">
              <img src="images/games/basketball.jpg" class="card-img-top" alt="Basketball Image">
              <div class="card-body">
                <h5 class="card-title">Basketball</h5>
                <p class="card-text">Basketball is a fast moving game that involves a lot of variety, including shooting, dribbling, passing, rebounding, defence and much more.let make the payris funolyampic 2024 memorable..</p>
                <a href="login.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          <!-- Swimming -->
          <div class="col " data-aos="flip-left">
            <div class="card" style="width: 18rem;">
              <img src="images/games/swimming.jpg" class="card-img-top" alt="Swimming Image">
              <div class="card-body">
                <h5 class="card-title">Swimming</h5>
                <p class="card-text">Swimming at the Olympics is both an individual and team sport where competitors propel their bodies through water in either an outdoor or indoor swimming pool using one of the following strokes: Freestyle, backstroke, breaststroke, or butterfly.</p>
                <a href="login.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
          <!-- Hockey -->
          <div class="col " data-aos="flip-down">
            <div class="card" style="width: 18rem;">
              <img src="images/games/hockey.jpg" class="card-img-top" alt="Hockey Image">
              <div class="card-body">
                <h5 class="card-title">Hockey</h5>
                <p class="card-text">Information about hockey.</p>
                <a href="login.php" class="btn btn-primary">Learn More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Games Section End -->
    <!-- Custom JavaScript for the back-to-top button -->
    <script>
      window.onscroll = function() {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.querySelector('.back-to-top').style.display = 'block';
        } else {
          document.querySelector('.back-to-top').style.display = 'none';
        }
      }

      document.querySelector('.back-to-top').addEventListener('click', function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      });
    </script>
   
    

</body>
</div>
</div>
</div>
</div>
</section>
<!-- Games Section End -->

<!-- more games highlight-->

<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/games/bg/image.jpg');" data-stellar-background-ratio="0.5">

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center"data-aos="fade-down-left">
        <h2 class="text-white">More Game Highlights</h2>
      </div>
    </div>
    <div class="row">
      <div class="nonloop-block-13 owl-carousel">
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12" data-aos="flip-left">
            <figure>
              <img src="images/highlightgames/highlight1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2023</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="login.php" class="text-black">olyampic</a></h2>
                <p>The star of that gold medal-winning Argentina squad was undoubtedly Lionel Messi who recently guided Argentina to Copa America 2021 triumph. This was Messi's first major international trophy with La Albiceleste. Messi's contract with FC Barcelona got over in 2021 but he is very close to sign a fresh five-year contract with the club.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12" data-aos="flip-right">
            <figure>
              <img src="images/highlightgames/highlight2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">october 20th 2023</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="login.php" class="text-black">Olyampic Championship</a></h2>
                <p>For the first time in the history of the Games, the Paris 2024 Paralympic Torch Relay and the Olympic Torch Relay will feature relay teams of 24 people, made up of champions, everyday athletes, volunteers, referees, and coaches. They will be organised to spread the energy of sport and teamwork throughout the country of France ahead of the Opening Ceremony of each Games. </p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12"data-aos="flip-right">
            <figure>
              <img src="images/highlightgames/highlight3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2022</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="login.php" class="text-black">Olyampic Championship</a></h2>
                <p>The USA has won the most basketball Olympic medals in the men’s category. They have won 16 gold medals out of the 19 tournaments they participated in, including seven consecutive titles from 1936 through 1968. They have won one silver medal and two bronze medals, making their overall Olympic medals tally to 19 in men’s basketball</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12"data-aos="flip-right">
            <figure>
              <img src="images/highlightgames/swimming.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="login.php" class="text-black">olyampic Championship</a></h2>
                <p>Olympic gold medalists in swimming</p>
              </div>
            </div>
          </div>
        </div>


        <!-- lastest news -->
        <div class="site-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-12 text-center" data-aos="zoom-out-up">
                <h2 class="text-black">Latest News</h2>
                <p>"Stay updated with payris FunOlympic Games 2024!"</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4"data-aos="fade-up-left">
                <div class="post-entry">
                  <div class="image">
                    <img src="images/highlightgames/usamatch.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text p-4">
                    <h2 class="h5 text-black"><a href="login.php">USA vs Denmark Who Will Win?</a></h2>
                    <span class="text-uppercase date d-block mb-3"><small> &bullet; 23 July 2021</small></span>
                    <p class="mb-0"> The modern Olympic Games or Olympics are the leading international sporting events featuring summer and winter sports competitions in which thousands of athletes from around the world participate in a variety of competitions. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4" data-aos="fade-up-right">
                <div class="post-entry">
                  <div class="image">
                    <img src="images/highlightgames/realmadrid.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text p-4">
                    <h2 class="h5 text-black"><a href="login.php">RealMad vs Striker Who Will Win?</a></h2>
                    <span class="text-uppercase date d-block mb-3"><small> &bullet; january 25, 2024</small></span>
                    <p class="mb-0"> RealMad and Striker face off in what promises to be an electrifying battle on the field. With both teams showcasing formidable talent and an unyielding determination to emerge victorious, fans are on the edge of their seats, eagerly anticipating the outcome of this epic showdown. </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4"data-aos="fade-up-right">
                <div class="post-entry">
                  <div class="image">
                    <img src="images/highlightgames/aus.jpg" alt="Image" class="img-fluid">
                  </div>
                  <div class="text p-4">
                    <h2 class="h5 text-black"><a href="login.php">Australia vs Newzealand Who Will Win?</a></h2>
                    <span class="text-uppercase date d-block mb-3"><small> &bullet; feb 25, 2024</small></span>
                    <p class="mb-0">New Zealand’s upper and middle-order batsmen must exercise caution when confronting Australia’s rapid bowlers on this challenging pitch.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

         <!-- ======= Footer ======= -->

        
        <footer id="footer" class="footer">

          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.php" class="logo d-flex align-items-center">
                  <span>Payris Fun Olyampic 2024</span>
                </a>
                <p>Stay connected with us for the latest updates and news about the Payris FunOlympic 2024.
              </div>

              <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="login.php">Broadcast</a></li>
                </ul>
              </div>

              <div class="col-lg-2 col-6 footer-links">
                <h4>Explore</h4>
                <ul>
                  <li><a href="login.php">Sports</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start" >
                <h4>Contact Us</h4>
                <p>
                  <strong>Phone:</strong> +1-123-456-7899<br>
                  <strong>Email:</strong> info@payris-funolympic.com<br>
                </p>

              </div>

            </div>
          </div>

          <div class="container mt-4">
            <div class="copyright">
              &copy; 2024 Copyright <strong><span> payris FunOlympic 2024</span></strong>. All Rights Reserved
            </div>

<script>
  AOS.init({
  offset:300,
  duration:1300,
  }
  );
</script>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
       
        <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-shor"></i></a>


            </body>

</html>