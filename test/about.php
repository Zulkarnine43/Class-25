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

    <!-- Jumbotron Header -->
    <div class="top-news">
        <div class="about-content">
        <!-- about -->
             <h3 class="tittle">About <i class="glyphicon glyphicon-user"></i></h3>
              <img src="images/ab.jpg" alt=" " />
              <p>Having hands on experience in creating innovative designs, I do offer design 
                solutions which harness the new possibilities of web based communication. 
                <label>I do specialize in all aspects of website designing,Nam libero tempore,aspects of website designing cum soluta nobis est eligendi  theme development,  
              possimus omnis dolor repellendus.Nam libero tempore, cum soluta nobis est eligendi  voluptatum...</label></p>
              <div class="clearfix"></div>
            <p class="nam">Nam libero tempore, cum soluta nobis est eligendi 
              optio cumque nihil impedit quo minus id quod maxime placeat facere 
              possimus, omnis voluptas assumenda est, omnis dolor repellendus.
              Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
              saepe eveniet ut et voluptates repudiandae sint Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna  et molestiae non recusandae.</p>
            <div class="more">
              <a href="single.html">Read More</a>
            </div>
        </div>
         <div class="top-inner second">
          <div class="col-md-6 top-text">
             <a href="single.html"><img src="images/pic1.jpg" class="img-responsive" alt=""></a>
                <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                <p>On Jun 25 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
           </div>
          <div class="col-md-6 top-text two">
             <a href="single.html"><img src="images/pic2.jpg" class="img-responsive" alt=""></a>
                <h5 class="top"><a href="single.html">Consetetur sadipscing elit</a></h5>
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt labore dolore magna aliquyam eratsed diam justo duo dolores rebum.</p>
                <p>On Jun 27 <a class="span_link" href="#"><span class="glyphicon glyphicon-comment"></span>0 </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open"></span>56 </a><a class="span_link" href="single.html"><span class="glyphicon glyphicon-circle-arrow-right"></span></a></p>
           </div>
           <div class="clearfix"> </div>
         </div>
              </div>

  </div>
  <!-- /.contain -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.contain -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>




</body>
</html>