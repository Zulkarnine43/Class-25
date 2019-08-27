<?php
if(isset($_POST['btn'])){

function signin($data){
$link = mysqli_connect("localhost","root","","test");
$sql = "SELECT email, password FROM signup WHERE email='$data[email]' and password='$data[password]'";
  $result= mysqli_query($link,$sql);
      $user = mysqli_fetch_assoc($result);
      
      if($user){
        header("Location:index.php");
      }
    }
    
signin($_POST);

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
  <div class="container">

    <!-- Jumbotron Header -->
   <div class="col-md-9 main">
  <!-- login-page -->
  <div class="login">
    <div >
      <div >
           <h3 class="tittle">Login <i ></i></h3>
           
           <p>If you have previously Login with us, <a href="#">click here</a></p>
           <form method="POST" action="">
             <div >
              <h4 class="c">Email Address* :</h4>
            </div>
          
            
                 <input type="text" id="email"  name="email" value="" >

            <div>
              <h4 class="d">Password* :</h4>
            </div>
           
            
                 <input type="password" name="password" value="">        
             <input type="submit" id="btn" name="btn" value="Login">
              
           </form>
          <a href="#">Forgot Password ?</a>
      </div>
      <div class="col-md-6 login-right">
          <a href="signup.php" >Create An Account</a>
      </div>
   
    </div>
  </div>
<!-- //login-page -->
     

 </div>
  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  

<script>
  var btnElement=document.getElementById('btn');
  btnElement.onclick = (){
    var firstNameValue = document.getElementById('email').value;
    alert(firstNameValue);
  }

</script>



</body>
</html>