
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




  <!-- Page Content -->
<div class="container">

  <div class="col-md-9 main">
   <div class="contact">
     <h3 class="tittle">Find Us <i class="glyphicon glyphicon-map-marker"></i></h3>
    <div class="contact-left">
      <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Purwokerto,+Central+Java,+Indonesia&amp;aq=0&amp;oq=purwo&amp;sll=37.0625,-95.677068&amp;sspn=50.291089,104.238281&amp;ie=UTF8&amp;hq=&amp;hnear=Purwokerto,+Banyumas,+Central+Java,+Indonesia&amp;ll=-7.431391,109.24783&amp;spn=0.031022,0.050898&amp;t=m&amp;z=14&amp;output=embed"></iframe>

    </div>
    <div class="contact-right">
      <p class="phn">+9100 2481 5842</p>
      <p class="phn-bottom">4578 Marmora
          <span>Road, Glasgow D04 89GR</span></p>
      <p class="lom">Nullam ac urna velit. Pellentesque in arcu tortor. 
        Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
        Aenean vehicula accumsan gravida.</p>
    </div>
    <div class="clearfix"> </div>
    <div class="contact-left1">
      <h3>Contact Us With <span>Any questions</span></h3>
      <div class="in-left">
        <form>
          <p class="your-para">Your Name :</p>
              <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
              <p class="your-para">Your Mail :</p>
              <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
              <p class="your-para">Phone Number:</p>
              <input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">

        </form>
      </div>
      <div class="in-right">
        <form>
          <textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
          <input type="submit" value="Submit">
        </form>
      </div>
      <div class="clearfix"> </div>
    </div>
    <div class="contact-right1">
      <h3><span>Social Websites</span></h3>
      <h4>Nullam ac urna velit pellentesque in <label>arcu tortor 
        Pellentesque nec</label></h4>
      <p>Nullam ac urna velit. Pellentesque in arcu tortor. 
        Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
        Aenean vehicula accumsan gravida. Cum sociis natoque penatibus
        et magnis dis parturient montes, nascetur ridiculus mus. Phasellus 
        et lectus in urna consequat consectetur ut eget risus.</p>
           <ul class=" side-icons con">
              <li><a class="fb" href="#"></a></li>
              <li><a class="twitt" href="#"></a></li>
              <li><a class="goog" href="#"></a></li>
              <li><a class="drib" href="#"></a></li>
             </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
  </div>
  </div>
  <!-- /.container -->
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