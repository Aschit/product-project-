<!-- header section starts -->
<header class="header">
    <section class="flex">
    <a href="main.php" class="logo" style="margin-left:300px;"> Payris Fun Olyampics 2024.</a>

        <div class="icons">
            <div id="search-btn" class="fas fa-search"></div>
            <div id="toggle-btn" class="fas fa-sun" onclick="toggleTheme()"></div>
        </div>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>
<style>
body {
    transition: background-color 0.4s ease;
  }
  .dark-theme {
    background-color: #DBE9FA;
    color: #008374;
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

<!-- side bar section ends -->