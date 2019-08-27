<?php
   session_start();
   if(isset($_SESSION['id'])){
    header('Location:dashboard.php');
   }

if(isset($_POST['btn'])){
         
         function loginCheck($data){
      $link = mysqli_connect("localhost","root","","php");
      $sql = "SELECT email, password FROM users WHERE email='$data[email]' and password='$data[password]'";
      $result=mysqli_query($link,$sql);

        
        $user = mysqli_fetch_assoc($result);

        if($user){

          session_start();
          $_SESSION['id']=$user['id'];
           $_SESSION['name']=$user['name'];

          header('Location:dashboard.php');
        }
        

         }
         loginCheck($_POST);
}



?>






<!Doctype html>
<html>

<head>
    <meta charset="UTF-8" >
    <title>Admin Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css"/>
</head>
<body>
<div class="container " style="margin-top: 200px ">
    <div class="row">
        <div class="col-sm-6 mx-auto">

           <div class="card">
               <div class="card-title">
                   <p align="center"><i><b>Admin Pannel</b></i></p>

               </div>
               <div class="card-body">
                   <form  method="POST" action="">
                       <div class="form-group row">
                           <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                           <div class="col-sm-9">
                               <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                           </div>
                       </div>
                       <div class="form-group row">
                           <label for="inputPassword3"  class="col-sm-3 col-form-label">Password</label>
                           <div class="col-sm-9">
                               <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                           </div>
                       </div>

                       <div class="form-group row">
                           <div class="col-sm-10">
                               <button type="submit" name="btn" class="btn btn-success btn-block" value="submit">Sign in</button>
                           </div>
                       </div>
                   </form>
                   <div class="form-group row">
                           <a href="index.php"  class="col-sm-3 col-form-label">login</a>
                           
                       </div>
                <div class="form-group row">
                           <a href="register.php"  class="col-sm-3 col-form-label">Create  Account</a>
                           
                       </div>

               </div>
           </div>




        </div>
    </div>
</div>
</body>



</html>