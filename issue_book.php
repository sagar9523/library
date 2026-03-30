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
     <link rel="stylesheet"href="style.css">
</head>

<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href=" admin/index.php">Library Management System</a>
            </div>
           <font style="color:white" ><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
           <font style="color:white" ><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
            
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
        <li class="nav-item dropdown"><a class ="nav-link"href="../logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light "style=" background-color:gray">
  <div class="container-fluid">
  <ul class="nav navbar-nav navbar-center">
  <a class="navbar-brand" href="admin_dashboard.php">Dashboard</a>
    <div class="collapse navbar-collapse" id="navbarNavlightDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <button class="btn btn-dark  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Book
          </button>
          <ul class="dropdown-menu dropdown-menu-dark ">
            <li><a class="dropdown-item" href="add_book.php">Add New Book</a></li>
            <li><a class="dropdown-item" href="manage_book.php">Manage Books</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <button class="btn btn-dark  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Category 
          </button>
          <ul class="dropdown-menu dropdown-menu-dark ">
            <li><a class="dropdown-item" href="add_cat.php">Add New Category</a></li>
            <li><a class="dropdown-item" href="manage_cat.php">Manage Category</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <button class="btn btn-dark  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Author
          </button>
          <ul class="dropdown-menu dropdown-menu-dark ">
            <li><a class="dropdown-item" href="add_author.php">Add New Author</a></li>
            <li><a class="dropdown-item" href="manage_author.php">Manage Authors</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="issue_book.php">Issue Book</a>
        </li>
      </ul>
    </div>
</nav><br>
    <span class="marq"><marquee>This library open at 08:00AM and close at 10:PM</marquee></span><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"id="main_content1">
              <form action="" method="post">
                <div class="form-group">
                    <label>Book Name:</label>
                    <input type="text"name="book_name"class="form-control"required="">
                </div>
               <div class="form-group">
                <lable>Book Author</lable>
                <select class="form-select" aria-label="Default select example" name="book_author" required>
                    <option selected>-Select author-</option>
                    <?php
                    $connection = mysqli_connect("localhost","root","");
                    $db = mysqli_select_db($connection,"lms");
                    $query="select author_name from authors";
                    $query_run = mysqli_query($connection,$query);
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        ?>
                        <option><?php echo $row['author_name'];?></option>
                        <?php
                    }
                    ?>
                </select>
               </div>
               <div class="form-group">
                    <label>Book No:</label>
                    <input type="text"name="book_no"class="form-control"required="">
                </div>
                <div class="form-group">
                    <label>Student  ID:</label>
                    <input type="text"name="student_id"class="form-control"required="">
                </div>
                <div class="form-group">
                    <label>Issue Date:</label>
                    <input type="text"name="issue_date"class="form-control" value="<?php echo date("y-m-d");?>" 
                    required="">
                </div>
                <button type="sumbit" class="btn btn-primary"name="issue_book">Issue Book</button>
              </form>
            </div>

            <div class="col-md-4"></div>

        </div>
    </body>
    </html>
    <?php
    if(isset($_POST['issue_book']))
    {
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"lms");
        $query = "insert into issued_books values(null,$_POST[book_no],'$_POST[book_name]','$_POST[book_author]',$_POST[student_id],1,'$_POST[issue_date]')";
        $query_run = mysqli_query($connection,$query);
        #header("Location:admin_dashboard.php");
    }
?>