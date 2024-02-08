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




    <title>Olympic</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<style>
    body {
    font-family: 'Arial', sans-serif;
    background-color: paleturquoise;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: pink;
}

.container-login100 {
    background-color: #DCDCDC;
}

.container-update {
    width: 50%;
    margin: 0 auto;
    margin-top: 20px;
    background-color: #fff;
    padding: 50px 30px;
    border-radius: 7px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

h3 {
    margin-top: -10px;
    text-align: center;
    color: #008374;
    font-family: Arial, sans-serif;
}

.form-group {
    margin-bottom: 20px;
    background-color: whitesmoke;
}

label {
    font-size: 18px;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ced4da;
    border-radius: 5px;
    margin-top: 5px;
    font-size: 16px;
}

.btn-info {
    font-size: 18px;
    padding: 10px;
    width: 100%;
    margin-top: 20px;
    background-color: #008374;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}
.btn-info:hover {
    background-color: #00695c;
}

</style>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: pink;">
        <a class="navbar-brand" href="main.php">Click to Go Dashboard.</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </div>
    </nav>
    <!-- navbar end -->
    <!-- dashboard start -->
    <div class="limiter">
        <div class="container-login100" style="background-color: #DCDCDC;">
            <div
                style="width: 50%; margin: 0 auto; margin-top: 20px; background-color: #CCF381; padding: 50px 30px; border-radius: 7px;">
                <h3 style="margin-top: -10px; text-align: center; color: #008374; font-family: Arial, sans-serif;">
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
                        <label for="gender">Gender:</label>
                        <input type="text" name="gender1" id="gender1" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?php echo $_GET['gender']; ?>">
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn btn-info btn-lg" name="submit">Update User</button>
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