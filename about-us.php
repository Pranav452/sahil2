<?php
    session_start();

    if (!isset($_SESSION['username'])){ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--    <link href="images/logo.jpg" rel="shortcut icon"> -->
    <title>Pets & Paws</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">  
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

</head><!--/head-->
        
<!--*********************************************START OF NAVIGATION BAR****************************************--> 
<body>
          
      <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php"><h4 class="wow fadeInDown" style="margin-top:20px; color:#FFF;">
                        <!--      <img src="images/logo.jpg"  width="15% "/> --> Pets & Paws</h4></a>
                </div>
    
                <div class="collapse navbar-collapse navbar-right wow fadeInDown">
                    <ul class="nav navbar-nav">
                         <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li class="active" ><a href="about-us.php">About Us</a></li>
                        <li ><a href="available.php">Pets for Adoption</a></li>
                        <li><a href="contacts.php">Contacts</a></li>
                                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
       <li id="page_about">
    <div class="title-wrapper">
        <center>
        <h2>About Us</h2>
    </div>
    <h4></h4>
    <p style="text-align:justify;">
                    The Pets&Paws operates an online pet adoption platform for users to find and adopt a pet.
    </p>
    
    <div class="v_space"></div>
    <center>
     <h4>Genuine Adopters </h4>
     <p style="text-align:justify;">
        Building loyalty and good relationship with our Adopters is our priority. 
        The company exist to give the good healthy pets to adopters.
    </p>
    
    <div class="v_space"></div>
    
    <div class="title-wrapper">
      
    </div><center>
    <div class="two_third" style="width:48%;">
        <h2>Mission</h2>
            <p style="text-align:justify;">
            Our goal is to give our users the best online pet adoption experience by giving them healthy pets.</p>
    </div>
    <div class="one_third_last" style="width:48%;">
        <h2>Vision</h2>
         <p style="text-align:justify;">
            To be the top of the mind trusted online pet adoption platform nationwide.
        </p>
    </div>
    </div>
    <br>
     <br>
      <br>
    <iframe height="400" frameborder="0" style="width: 100%;" src="http://maps.google.com/maps?q=13.824586996963804,121.06706139160157&amp;ll=13.824586996963804,121.06706139160157&amp;z=11&amp;output=embed"> </iframe>
    <div class="clear"></div>
</li>
        
<!--*************************************************** FOOTERS **********************************************-->
  
    <?php include('includes/footer.php');?>

<?php include('loginModal.php');?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>

<?php 

} else if(isset($_SESSION['username'])) { 

    include('includes/admin.php');

} ?>