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




    <title> payris funOlympic 2024</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

</head>


<body>
    <ul class="navbar navbar-light bg-light" style="font-size: 15px; padding: 0.5rem 1rem">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="main.php">Click to Go Dashboard</a>
  </li>
    </ul>
    
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="limiter">
        <div class="container-login100" style="background-color: #DCDCDC;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #CCF381; padding: 50px 30px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #000D0B; font-family: Arial, sans-serif;">
                    <strong>UPDATE USER</strong>
                </h3>
                <form action="update-user.php" method="get" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="ID">ID:</label>
                        <input type="text" name="id1" id="id1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['id']; ?>">
                    </div>
                    <!-- Fullname -->
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input type="text" name="fullname1" id="fullname1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['fullname']; ?>">
                    </div>
                    <!-- Username -->
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username1" id="username1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['username']; ?>">
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email1" id="email1" class="form-control" aria-describedby="helpId"
                            value="<?php echo $_GET['email']; ?>">
                    </div>
                    <!-- Phone Number -->
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" name="phone_number1" id="phone_number1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['phone_number']; ?>">
                    </div>
                    <!-- Country -->
                    <div class="form-group">
                        <label for="country">Country:</label>
                        <input type="text" name="country1" id="country1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['country']; ?>">
                    </div>
                    <!-- Gender -->
                    <div class="form-group">
                        <label for="sports">Sports:</label>
                        <input type="text" name="sports1" id="sports1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['sports']; ?>">
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn btn-info btn-lg" name="submit">Confirm</button>
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