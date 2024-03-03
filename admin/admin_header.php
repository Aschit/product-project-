<!-- header section starts -->
<header class="header">
    <section class="flex">
    <a href="main.php" class="logo"> Payris Fun Olyampics 2024.</a>
        <div class="icons">
            <div id="user-btn" class="fas fa-user"></div>
        </div>
    </section>
</header>

<script>
  function toggleTheme() {
    var body = document.getElementsByTagName('body')[0];
    body.classList.toggle('dark-theme');
  }
</script>
<!-- header section ends -->

<!-- side bar section starts  -->
<div class="side-bar">

    <div class="close-side-bar">
        <i class="fas fa-times"></i>
    </div>

    <div class="profile">
    <img src="../images/dashboard/admin.jpg">
        <a href="main.php" class="btn"><?php echo $_SESSION['username']; ?></a>
    </div>

    <nav class="navbar">
        <a href="main.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a href="view-users.php"><i class="fas fa-user"></i><span>Users</span></a>
        <a href="view-post.php"><i class="fas fa-graduation-cap"></i><span>News</span></a>
        <a href="view-comment.php"><i class="fas fa-comment"></i><span>Comments</span></a>
        <a href="../index.php" onclick="return confirm('Are You sure want to Logout??');"><i
                class="fas fa-right-from-bracket"></i><span>logout</span></a>
    </nav>

</div>

<!-- side bar section ends -->