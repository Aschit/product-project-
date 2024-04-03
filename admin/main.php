<?php 
session_start();
include '../config/connection.php';
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funolyampic2024</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="admincss/style.css">
    <link rel="icon" href="images/logo.jpg">


</head>

    <?php include 'admin_header.php'; ?>

    <section class="dashboard">

        <h1 class="heading" style="text-align: center; color:red;">dashboard</h1>

        <div class="box-container">

            <div class="box">
                <?php
                 include '../config/connection.php';
                 $query = "SELECT * FROM users";
                 $result = mysqli_query($conn, $query);
                 if ($result) {
                     $rowcount = mysqli_num_rows($result);
                     echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL USERS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                 }
             ?>
             <img src="../images/dashboard/user.jpg" width="40">
                <p>signIn users details</p>
                <a href="view-users.php" class="btn">Manage Users</a>
            </div>

            <div class="box">
            <?php 
                include '../config/connection.php';
                $query="select * from comment";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    $rowcount=mysqli_num_rows($result);
                    echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL COMMENTS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                }
                ?>
                <img src="../images/dashboard/comment.jpg" width="50">
                <p>view user comments</p>
                <a href="view-comment.php" class="btn">Manage comments</a>
            </div>

            <div class="box">
            <?php 
                include '../config/connection.php';
                $query="select * from posts";
                $result=mysqli_query($conn,$query);
                if($result)
                {
                    $rowcount=mysqli_num_rows($result);
                    echo "<h1><span style='font-size: 20px; color: #808080;'>TOTAL POSTS:</span> <span style='font-size: 30px;'>$rowcount</span></h1>";
                }
                ?>
                <img src="../images/dashboard/post.jpg" width="60">
                <p>Read Posts</p>
                <a href="view-post.php" class="btn">Manage News</a>
            </div>

            <div class="box">
            <img src="../images/dashboard/update.jpg" width="35">
                <p>update posts</p>
                <a href="add-post.php" class="btn">Add New Posts</a>
            </div>

            <div class="box">
            <img src="../images/dashboard/games.jpg" width="60">
                <p>games list</p>
                <a href="upload-photo.php" class="btn">Upload Games</a>
            </div>

            <div class="box">
            <img src="../images/dashboard/upload.jpg" width="40">
                <p>live broadcast</p>
                <a href="upload-video.php" class="btn">Upload Videos</a>
            </div>

        </div>

    </section>


    <!-- <?php include 'footer.php'; ?> -->
</html>
<?php
}
?>