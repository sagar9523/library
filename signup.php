<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link rel="stylesheet"href="design.css">
     
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Library Management System</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">User Login</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="admin/index.php">Admin Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="signup.php"></span>Signup</a>
              </li>
            </ul>
        </div>
    </nav>
    <br><br>
    <span><marquee>*****This library open at 08:00AM and close at 10:PM*****</marquee></span><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h2>Welcome to Library</h2>
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
        <<div class="col-md-8" id="main_content1">
            <center><h3>User Registration Form</h3></center>
            <form action="register.php" method="post">
                <div class="form-group">
                    <label for="name">Full Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email ID:</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" class="form-control" required></textarea> 
                </div>
                <br>
                <button type="submit" class="btn">Register</button> 
                <br>
                <hr>   
            </form>
        </div>
    </div>
</body>
</html>
