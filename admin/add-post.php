<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:home.php");
}
else
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicons -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunOlympic payris 2024 </title>
    <link rel="stylesheet" href="admincss/style.css">

    <!-- font awesome cdn link  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<!-- dashboard start -->
<?php include 'admin_header.php'; ?>

<section class="dashboard">
    <h1 class="heading" style="font-size: 30px; color: #333; margin-top: 20px; font-weight: bold;">Add New Post</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label style="font-size: 20px;">Title:</label>
        <br>
        <input type="text" name="title" id="title" class="form-control form-control-lg" placeholder="Write title here"
            aria-describedby="helpId" required
            style="border: 1px solid #ccc; height: 40px; width: 800px; padding: 10px; font-size:20px"></input>
        <br><br>
        <div class="form-group">
            <label for="content" style="font-size: 20px;">Content:</label>
            <br>
            <textarea class="form-control form-control-lg" name="content" id="content" placeholder="Content goes here"
                required style="border: 1px solid #ccc; height: 100px; width: 800px; padding: 10px;font-size:20px"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="select" style="font-size: 18px;">Select Image:</label>
            <br>
            <input type="file" class="form-control-file" style="font-size:20px; padding: 7px 1px;" name="image"
                id="image" placeholder="Upload Image" aria-describedby="fileHelpId">
        </div>
        <button type="submit" class="btn bg-primary" name="submit"
            style="font-size: 18px; padding: 10px; width: 100px;">Add Post</button>
        <button type="reset" class="btn bg-danger"
            style="font-size: 18px; padding: 10px; width: 100px;">Cancel</button>
    </form>
    </div>
    </div>
    </div>


    <?php
            if(isset($_POST['submit']))
            {
                include '../config/connection.php';
                $title=$_POST['title'];
                $content=$_POST['content'];
                $image_name=$_FILES['image']['name'];
                $image_type=$_FILES['image']['type'];
                $image_tmp=$_FILES['image']['tmp_name'];
                $query="insert into posts(title,content,image)values('$title','$content','$image_name')";
                $run=mysqli_query($conn,$query);
                if($run)
                {
                    echo "<script>window.alert('Post Added Successfully!')</script>";
                }
                else
                {
                    echo "<script>window.alert('Error Found!')</script>";
                }
            }
            
            ?>
    </div1>
    </div1>
    </div1>
    <!-- dashboard end -->
    </body>
</section>

</html>
<?php
}
?>