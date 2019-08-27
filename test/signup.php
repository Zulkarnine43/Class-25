<?php
if(isset($_POST['btn'])){

    function add($data){
//print_r($_POST);
$link = mysqli_connect("localhost","root","","test");
$sql = "INSERT INTO signup (firstname,lastname,email,password,confirmpassword) VALUES ('$data[firstname]','$data[lastname]','$data[email]',
'$data[password]','$data[confirmpassword]') ";
      mysqli_query($link,$sql);


}
add($_POST);
}

?>



<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="style.css">
<head>
    <title>Home</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style >
      .contain ul{
        list-style: none;
      }
      .contain ul li  {
        width:150px;
        height: 50px;
        float: left;
        text-align: center;
        border: 1px solid white;
        font-size: 18px;
        line-height: 50px;
        background-color: green;
        position: relative;

      }
      .contain ul li:hover{
        background-color: red;
      }
      .contain ul ul {
        display: none;
      }
      .contain ul li:hover >ul {
        display: block;
      }
      .contain ul ul ul {
        margin-left: 100px;
        top:0px;
        position: absolute;
      }
    </style>
</head>
<body >

<div class="contain">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="blog.php">Blog</a></li>
   <li> <a href="education.php">Education</a></li>
    <li><a href="entertainment.php">Entertainment</a>
          <ul>
            <li><a>movies</a>
             <ul>
               <li>bollywood</li>
                <li>dhollywood</li>
                <li>tollywood</li>
             </ul>

            </li>
            <li><a>natoks</a></li>
            <li><a>others</a></li>
          </ul>

    </li>

    <li><a href="sports.php">Sports</a></li>
       <li> <a href="news.php">News</a></li>
        <li><a href="about.php">about Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="signin.php">Sign In</a></li>
        <li><a href="signup.php">Sign Up</a></li>
       </ul>

</div>

<div  class="container">
 <form  method="POST" action="">
 

    <!-- Jumbotron Header -->
   <div class="col-md-9 main">
  <!-- register -->
      <div class="sign-up-form">
         
            <div >
              <h4 class="a">First Name* :</h4>
            </div>
            
             
                <input type="text" name="firstname" value="" >

             
           
            <div >
              <h4 class="b">Last Name* :</h4>
            </div>
          
        
                  <input type="text"  name="lastname" value="" >

           
            <div >
              <h4 class="c">Email Address* :</h4>
            </div>
          
            
                 <input type="text"  name="email" value="" >

            <div>
              <h4 class="d">Password* :</h4>
            </div>
           
            
                 <input type="password" name="password" value="">

            <div >
              <h4>Confirm Password* :</h4>
            </div>
              
                       <input type="password"  name="confirmpassword" value="" >
         
                      <input type="submit"  name="btn" value="submit">
         
        </div>
        
      </div>
       </form>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</div>

</body>
</html>