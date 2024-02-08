<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olympic Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>



.navbar-nav li a[href="profile.php"] {
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
        <li class="nav-item">
          <a class="nav-link" href="broadcast.php">Live</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Account
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">Login</li>
            <li><a class="dropdown-item" href="register.php">SignIn</a></li>
            <li><a class="dropdown-item" href="logout.php">LogOut</a></li>

          </ul>
        </li>
         <li><a href="profile.php"> welcome User</a></li>
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
            <div class="carousel-item active" data-bs-interval="10000" >
                <img src="images/paris.jpg" class="d-block w-100" alt="First Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item"  data-bs-interval="2000">
                <img src="images/image2.jpg" class="d-block w-100" alt="Second Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="10000">
                <img src="images/image3.jpg" class="d-block w-100" alt="Third Slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
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
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">Live</h6>
                    <h1 class="mb-4">Welcome to the <span class="text-primary text-uppercase">Olympic Live</span></h1>
                    <p class="mb-4">Tab here To watch live videos</p>
                    <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i class="fa fa-play-circle" aria-hidden="true"
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

    <!-- Games Section Start -->
    <section class="container-xxl py-5" id="games">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-primary text-uppercase">Games</h6>
                <h1 class="mb-5">Enjoy Our <span class="text-primary text-uppercase">Games</span></h1>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <!-- Football -->
                <div class="col wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card" style="width: 18rem;">
                        <img src="images/games/football.jpg" class="card-img-top" alt="Football Image">
                        <div class="card-body">
                            <h5 class="card-title">Football</h5>
                            <p class="card-text"> Review.</p>
                            <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i class="fa fa-play-circle" aria-hidden="true"
                                style="color: #e60000;font-size: 30px; "></i>
                                <span style="font-size: 20px; color:black">View</span>
                        </div>
                    </div>
                </div>
                <!-- Basketball -->
                <div class="col wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card" style="width: 18rem; ">
                        <img src="images/games/basketball.jpg" class="card-img-top" alt="Basketball Image">
                        <div class="card-body">
                            <h5 class="card-title">Basketball</h5>
                            <p class="card-text"> Stream.</p>
                            <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i class="fa fa-play" aria-hidden="true"
                                style="color: #e60000;font-size: 30px; "></i>
                                <span style="font-size: 20px; color:black">Watch</span>
                        </div>
                    </div>
                </div>
                <!-- Swimming -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="images/games/swimming.jpg" class="card-img-top" alt="Swimming Image">
                        <div class="card-body">
                            <h5 class="card-title">Swimming</h5>
                            <p class="card-text"> Stream.</p>
                            <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i class="fa fa-play" aria-hidden="true"
                                style="color: #e60000;font-size: 30px; "></i>
                                <span style="font-size: 20px; color:black">Watch</span>
                          
                        </div>
                    </div>
                </div>
                <!-- Hockey -->
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card" style="width: 18rem;">
                        <img src="images/games/hockey.jpg" class="card-img-top" alt="Hockey Image">
                        <div class="card-body">
                            <h5 class="card-title">Hockey</h5>
                            <p class="card-text">Stream.</p>
                            <a href="https://www.youtube.com/watch?v=Zafhz4SRx1s"
                            class="glightbox btn-watch-video d-flex align-items-center"><i class="fa fa-play" aria-hidden="true"
                                style="color: #e60000;font-size: 30px; "></i>
                                <span style="font-size: 20px; color:black">Watch</span>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games Section End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

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

</body>                
      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Games Section End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>



<!-- more games highlight-->

<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/games/bg/image.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-white">Top Players</h2>
          </div>
        </div>
        <div class="row">
          <div class="nonloop-block-13 owl-carousel">
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="images/highlightgames/img1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/highlightgames/img2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/highlightgames/img3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="images/highlightgames/img4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        

       <!-- lastest news -->
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-black">Latest News</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/highlightgames/img5.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/highlightgames/img6.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/highlightgames/img7.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!-- footer section begins -->
    <footer class="site-footer border-top">

            </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              copyright @ 2024
            </p>
          </div>
          
    
      </div>
    </footer>
  </div>
</body>
</html>