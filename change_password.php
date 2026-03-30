<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="user_dashboard.php">Library Management System (LMS)</a>
            </div>
            <font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?></strong></span></font>
            <font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?></strong></font>
            <ul class="nav navbar-nav navbar-right">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="view_profile.php">View Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="change_password.php">Change Password</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
            </ul>
        </div>
    </nav><br>
    <span><marquee>This is library mangement system. Library opens at 8:00 AM and close at 8:00 PM</marquee></span><br><br>
        <center><h4>Change Student Password</h4><br></center>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="update_password.php" method="post">
                    <div class="form-group">
                        <label for=" old password">Enter Current Password:</label>
                        <input type="password" class="form-control" name="old_password">
                    </div>
                    <div class="form-group">
                        <label for="New Password">Enter New Password:</label>
                        <input type="password" name="new_password" class="form-control">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary">Update Password</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
</body>
</html>