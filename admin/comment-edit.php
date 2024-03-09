<?php 
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else
{
?>
<!doctype html>
<html lang="en">

<head>


    <title>FunOlympic  payris 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    
    <style>
    body {
        background-color: #c6e2ff;
    }

    .container-login100 {
        background-color: #fff;
        padding: 10px;
        border-radius: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .input-container {
        position: relative;
    }

    .input-container i {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        left: -25px;
    }
    </style>
</head>

<body>
    <ul class="nav justify-content-center" style=" padding: 0.5rem 1rem; font:size 25px; background-color:blanchedalmond;" >
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="main.php">Click to Go Dashboard</a>
  </li>
    </ul>
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="limiter">
        <div class="container-login100" style="background-color:  #c6e2ff;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #d3ffce; padding: 50px 30px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #837400; font-family: Arial, sans-serif;">
                    <strong>UPDATE COMMENT</strong>
                </h3>
                <form action="update-comment.php" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ID">ID:</label>
                        <input type="text" name="id1" id="id1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username1" id="username1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['user']; ?>">
                    </div>
                    <!-- Comment -->
                    <div class="form-group">
                        <label for="comment">Comment:</label>
                        <input type="text" name="comment1" id="comment1" class="form-control" aria-describedby="helpId"
                            value="<?php echo $_GET['comment']; ?>">
                    </div>
                    <!-- Date -->
                    <div class="form-group">
                        <label for="date">Date:</label>
                        <input type="text" name="date1" id="date1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['date']; ?>">
                    </div>
                    <!-- Rate -->
                    <div class="form-group">
                        <label for="rate">Rate:</label>
                        <input type="text" name="rate1" id="rate1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['rate']; ?>">
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn bg-info btn-lg" name="submit"  >Confirm</button>
                </form>
            </div>
        </div>
    </div>
    <!-- dashboard end -->
</body>

</html>
<?php
}
?>