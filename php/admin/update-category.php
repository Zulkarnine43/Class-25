<?php
if(isset($_POST['btn'])){
  $id = $_GET['update'];
  $categoryName = $_POST['categoryName'];
  $categoryDescription = $_POST['categoryDescription'];

$link = mysqli_connect("localhost","root","","php");
  $sql = "UPDATE addcategory SET id=$id, categoryName=$categoryName , categoryDescription=$categoryDescription WHERE id=$id";
  mysqli_query($link,$sql);

  header("Location:manage-category.php");
}
?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" >
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="dashboard.php"/>
    <link rel="stylesheet" href="manage-category.php"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">


              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Category Info
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="add-category.php">Add Category</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="manage-category.php">Manage Category</a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Blog Info
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="add-blog.php">Add Blog</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="manage-blog.php">Manage Blog</a>
                  </div>
              </li>



          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          <ul class="navbar-nav">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin Name
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item" href="?Logout=true">Logout</a>
                  </div>
              </li>


          </ul>

      </div>

  </div>
</nav>

 
<div class="container " style="margin-top: 200px ">
    <div class="row">
        <div class="col-sm-6 mx-auto">

            <div class="card">
                <div class="card-title">
                    <p align="center"><i><b>Category</b></i></p>

                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group row">
                            <label for="Name" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="categoryName" class="form-control" value="" id="Name" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Description" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <input type="text" name="categoryDescription" class="form-control"  value="" id="Description" placeholder="Category Description">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control textarea"   name="longDescription" value="" rows="5" cols="40"></textarea>
                            </div>
                        </div>

                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Publication Status</label>
                    <div class="col-sm-9">
                        <input type="radio" class="form-control"  name="status" value="published" placeholder="">published
                        <input type="radio" class="form-control"  name="status" value="Unpublished" placeholder="" >Unpublished
                    </div>
                </div>


                   
                             <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="btn" class="btn btn-success btn-block" value="submit">Update Category Info</button>
                            </div>
                        </div>
                    </form>
                      <a href="dashboard.php" style="color: red;">Back to Deshboard</a>
           
                </div>
            </div>




        </div>
    </div>
</div>

<script src="../assets/js/jquery-3.3.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/tinymce/js/tinymce/tinymce.min.js">  </script>

<script>tinymce.init{[selector:'.textarea']};</script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>