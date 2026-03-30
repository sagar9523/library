<?php
    session_start();
    function get_user_issue_book_count(){
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms");
        $user_issue_book_count = 0;
        $query = "select count(*) as user_issue_book_count from issued_books where student_id = $_SESSION[id]";
        $query_run = mysqli_query($connection,$query);
        while ($row = mysqli_fetch_assoc($query_run)){
            $user_issue_book_count = $row['user_issue_book_count'];
        }
        return($user_issue_book_count);
    }
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
     <link rel="stylesheet"href="design.css">
</head>
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard">Library Management System</a>
            </div>
            
           <font style="color:gre</form>en" ><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
           <font style="color:green" ><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
            
            <ul class="nav navbar-nav navbar-right">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            My profile
          </button>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li><a class="dropdown-item" href="view_profile.php">View Profile</a></li>
            <li><a class="dropdown-item" href="edit_profile.php">Edit Profile</a></li>
            <li><a class="dropdown-item" href="change_password.php">Change Password</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown"><a class ="nav-link"href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>

</nav><br>
    <div class="row">
        <div class="col-md-3" style="margin: 25px">
            <div class="card card-blue" style="width: 300px">
              <div class="card-header">Book Issued</div>
              <div class="card-body">
                <p class="card-text">No of book issued: <?php echo get_user_issue_book_count();?></p>
                <a class="btn btn-success" href="view_issued_book.php">View Issued Books</a>
              </div>
            </div>
        </div>
        <div class="col-md-3" style="margin: 25px">
            <div class="card bg-light" style="width: 300px">
                <div class="card-header">Book Returned</div>
                <div class="card-body">
                    <p class="card-text">No of Book Returned: <?php echo get_user_issue_book_count();?></p>
                    <a class="btn btn-light" style="background-color: lightpink;" href="view_returned_book.php">View Returned Books</a>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
    </div>
    </body>
    </html>