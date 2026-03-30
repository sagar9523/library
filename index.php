<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link rel="stylesheet" href="style.css">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin/index.php">Library Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link" href="../index.php">User Login</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Admin Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../signup.php"></span>Signup</a>
              </li>
            </ul>
        </div>
    </nav><br>
    <span class="marq"><marquee>*****This library open at 08:00AM and close at 10:PM*****</marquee></span><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h2>Welcome to library</h2>
            <hr>
            <h5>Library Timing</h5>
            <ul>
                <li>Opening: 08:00 AM</li>
                <li>Closing: 10:00 PM</li>
            </ul>
            <h5>What We provide ?</h5>
            <ul>
                <li>AC Rooms</li>
                <li>Free Wi-fi</li>
                <li>Learning Environment</li>
                <li>Discussion Room</li>
                <li>Free Electricity</li>
                <li>News Paper</li>
                <li>Personal Study table</li>
            </ul>
        </div>
        <div class="col-md-8" id="main_content">
            <center><h3>Admin Login Form</h3></center>
            <form action="" method="post">
                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" name="login" class="btn">Login</button>    
            </form>
            <?php 
                if(isset($_POST['login'])){
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"lms");
                    $query = "select * from admins where email = '$_POST[email]'";
                    $query_run = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        if($row['email'] == $_POST['email']){
                            if($row['password'] == $_POST['password']){
                                $_SESSION['name'] =  $row['name'];
                                $_SESSION['email'] =  $row['email'];
                                header("Location: admin_dashboard.php");
                            }
                            else{
                                ?>
                                <br><br><center><span class="alert-danger">Wrong Password !!</span></center>
                                <?php
                            }
                        }
                    }
                }
            ?>
        </div>
    </div>
    <footer class="bg-dark text-white mt-5 p-4 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: support@library.com</p>
                    <p>Phone: 6200858397</p>
                </div>
                <div class="col-md-4">
                    <h5>About</h5>
                    <p><a href="about.php" class="text-white">Learn more about us</a></p>
                </div>
                <div class="col-md-4">
                    <h5>Help</h5>
                    <p><a href="chatbond.php" class="text-white">Chat with us</a></p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
