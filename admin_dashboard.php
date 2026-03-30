<?php
require('function.php');
session_start();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lms</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href=" admin_dashboard.php" style="color:white">Library Management System</a>
      </div>
      <font style="color:white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
      <font style="color:white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>

      <ul class="nav navbar-nav navbar-right">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item dropdown"><a class="nav-link" href="../index.php" style="color:white">Logout</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <br>
  <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <ul class="nav navbar-nav navbar-center">
        <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
        <div class="collapse navbar-collapse" id="navbarNavlightDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <button class="btn btn-theme  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Book
              </button>
              <ul class="dropdown-menu dropdown-menu-light" style="background-color:#e3f2fd;">
                <li><a class="dropdown-item" href="add_book.php">Add New Book</a></li>
                <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-theme  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Category
              </button>
              <ul class="dropdown-menu dropdown-menu-light" style=" background-color:#e3f2fd;">
                <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
                <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-theme  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Author
              </button>
              <ul class="dropdown-menu dropdown-menu-light" style="background-color:#e3f2fd; ">
                <li><a class="dropdown-item" href="add_author.php">Add New Author</a></li>
                <li><a class="dropdown-item" href="manage_author.php">Manage Authors</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="issue_book.php">Issue Book</a>
            </li>
            <li><a class="nav-link" href="return_book.php"> Return Book</a></li>
          </ul>
        </div>
  </nav><br>
  <span class="marq">
    <marquee>*****This library open at 08:00AM and close at 10:PM*****</marquee>
  </span><br>
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header" style="color:black">
          Registered Users:
        </div>
        <div class="card-body">
          <p class="card-text">No. of total users: <?php echo get_user_count(); ?></p>
          <a href="reguser.php" class="btn btn-danger" target="_blank">View Registered Users</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header">
          Registered Books:
        </div>
        <div class="card-body">
          <p class="card-text">No. of available books: <?php echo get_book_count(); ?></p>
          <a href="regbook.php" class="btn btn-warning" target="_blank">View Registered books</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header">
          Registered Category:
        </div>
        <div class="card-body">
          <p class="card-text">No. of available Category: <?php echo get_category_count(); ?></p>
          <a href="regcat.php" class="btn btn-success" target="_blank">View Registered Category</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header">
          Registered Authors:
        </div>
        <div class="card-body">
          <p class="card-text">No. of available Authors: <?php echo get_author_count(); ?></p>
          <a href="regauthor.php" class="btn btn-warning" target="_blank">View Registered Authors</a>
        </div>
      </div>
    </div><br><br><br>
  </div>
  <br>
  <div class="row">
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header">
          <div class="card-header"
            style="background-color: blue; color: white; border-top-left-radius: 15px; border-top-right-radius: 15px;">
            Books Issued :
          </div>
        </div>
        <div class="card-body">
          <p class="card-text"> No of book Issued: <?php echo get_issued_book_count(); ?> </p>
          <a href="view_issued_book.php" class="btn btn-primary" target="_blank">View issued Books</a>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card bg-light" style="width:300px">
        <div class="card-header">
          Books Returned :
        </div>
        <div class="card-body">
          <p class="card-text"> No of book Returned: <?php echo get_issued_book_count(); ?> </p>
          <a href="view_issued_book.php" class="btn btn-primary" target="_blank">View Returns Book</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>