<?php
if(isset($_POST['btn'])){

    function add($data){
//print_r($_POST);
$link = mysqli_connect("localhost","root","","php");
$sql = "INSERT INTO users (firstname,lastname,email,password,confirmpassword) VALUES ('$data[firstname]','$data[lastname]','$data[email]',
'$data[password]','$data[confirmpassword]') ";
      mysqli_query($link,$sql);


}
add($_POST);
}

?>



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
       <div class="form-group row">
                           <a href="index.php"  class="col-sm-3 col-form-label">login</a>
                           
                       </div>
                <div class="form-group row">
                           <a href="register.php"  class="col-sm-3 col-form-label">Create  Account</a>
                           
                       </div>
