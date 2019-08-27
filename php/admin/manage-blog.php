<?php

function manage(){
    $link = mysqli_connect("localhost","root","","php");
    $sql = "SELECT * FROM addblog";
    $result=mysqli_query($link,$sql);
    return $result;
}
 $result=manage();
?>
<?php

if(isset($_GET['delete'])){
   //function delete($id){
  $id= $_GET['delete'];
     $link = mysqli_connect("localhost","root","","php");
    $sql = "DELETE FROM addblog WHERE id=$id";
    mysqli_query($link,$sql);

    header("Location:manage-blog.php");



}


?>




<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" >
    <title>manage-blog</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="dashboard.php"/>
    <link rel="stylesheet" href="add-category.php"/>
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

            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">blogName</th>
                    <th scope="col">blogDescription</th>
                    <th scope="col">longDescription</th>
                    <th scope="col">status</th>
                    <th scope="col">Action</th>


                </tr>
                </thead>
                <tbody>
                    <?php while($manage=mysqli_fetch_assoc($result)) {?>
                <tr>
                    
                    <td><?php  echo $manage['id'];   ?></td>
                    <td contenteditable="true"><?php  echo $manage['blogName'];   ?></td>
                    <td><?php  echo $manage['blogDescription'];   ?></td>
                     <td><?php  echo $manage['longDescription'];   ?></td>
                      <td><?php  echo $manage['status'];   ?></td>
                      <td>
                   <a href="?delete=<?php echo $manage['id']; ?>">delete</a>
                   <a href="?edit=<?php echo $manage['id']; ?>">edit</a>
                   

                      </td>
                </tr>
            <?php   }  ?>
                </tbody>
            </table>
<a href="dashboard.php" style="color: red;">Back to Deshboard</a>

    </div>
</div>
</div>
<script src="../assets/js/jquery-3.3.1.js"></script>
<script src="../assets/js/bootstrap.bundle.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</body>



</html>



