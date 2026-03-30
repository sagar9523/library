<?php
    session_start();
    #fetch data from database
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"lms");
    $name = "";
    $email = "";
    $mobile = "";
    $query = "select * from admins where email = '$_SESSION[email]'";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
     <link rel="stylesheet" type="text/css"href="../bootstrap-4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet"href="style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">Library Management System (LMS)</a>
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
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
        </div>
    </nav><br>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="card" style="background-color: #fff; border: 2px solid #007bff; color: #007bff;">
                <div class="card-body">
                    <center><h4 style="color: #007bff;">Admin Profile Detail</h4></center>
                    <form>
                        <div class="form-group">
                            <label for="name" style="color: #007bff;">Name:</label>
                            <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email" style="color: #007bff;">Email:</label>
                            <input type="text" value="<?php echo $email;?>" class="form-control" disabled>
                        </div>
                        <div class="form-group">
                            <label for="mobile" style="color: #007bff;">Mobile:</label>
                            <input type="text" value="<?php echo $mobile;?>" class="form-control" disabled>
                        </div>
                    </form>
                </div>
            </div>
    
        </div>
</body>
</html>