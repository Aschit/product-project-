<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


  <title>Admin header</title>
</head>
<body>
  <!-- header section starts -->
<header class="header">
    <section class="flex">
    <a href="main.php" class="logo" style="margin-left:300px;"> Payris Fun Olyampics 2024.
    <img src="image/olyampic logo.png"  alt="logo" width="50" height="auto" class="rounded-circle">

  </a>

        <div class="icons">
            <div id="toggle-btn" class="bi bi-star-half" onclick="toggleTheme()"></div>
        </div>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
  // Function to display morning or evening greeting
  function displayGreeting() {
    var now = new Date();
    var hour = now.getHours();
    var greetingMsg = document.getElementById('greeting');

    if (hour >= 0 && hour < 12) {
      greetingMsg.textContent = "Good morning!";
    } else {
      greetingMsg.textContent = "Good evening!";
    }
    greetingMsg.classList.add('animate__animated', 'animate__bounceIn');

  }
  // Call the function when the page loads
  window.onload = displayGreeting;

</script>
<style>
body {
    transition: background-color 0.4s ease;
  }
  .dark-theme {
    background-color: #E9967A;
    color: #E9967A;
  }
  @keyframes bounceIn {
    0% {
      transform: scale(0.1);
      opacity: 0;
    }
    60% {
      transform: scale(1.2);
      opacity: 1;
    }
    100% {
      transform: scale(1);
    }
  }

  .animate__bounceIn {
    animation-name: bounceIn;
    animation-duration: 1s;
  }
</style>
<!-- header section ends -->

<!-- side bar section starts  -->
<div class="side-bar" style="background-color: #F7F39A;">

    <div class="close-side-bar">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
    <img src="../images/dashboard/admin.jpg">
        <a href="main.php" class="btn"><?php echo $_SESSION['username']; ?></a>
        <div id="greeting" style="margin-top: 10px; font-size:20px;"></div>


    </div>

    <nav class="navbar">
        <a href="main.php" style="color: green;">Home</span></a>
        <a href="view-users.php" style="color: green;">Users</span></a>
        <a href="view-post.php" style="color: green;">News</span></a>
        <a href="view-comment.php" style="color:green;">Comments</span></a>
        <a href="../index.php" style="color:red; text-decoration:none;" onclick="return confirm('Are You sure want to Logout??');"><i
                class="fas fa-right-from-bracket" style="color:red;"></i><span>logout</span></a>
    </nav>

</div>
</body>
</html>

<!-- side bar section ends -->