
<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
        include("functions.php");
        include("/libraries/views/head.php");
    ?>
    </head>
    <body>
        
    <!-- Wrap all page content here -->
    <script src="web/js/jquery-2.1.3.js"></script>
    <div id="wrap">

    <header>

<!-- Fixed navbar -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
<!--  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->

<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav nav-justified">
            <li><a href="index.php#section4">Offers</a></li>
            <li><a href="index.php#section2">Our Staff</a></li>
          <!--<li class="active"><a href="#">Appointment</a></li>-->
          <li class="dropdown active">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Appointment
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="appointment.php#section1">Filling</a></li>
            <li><a href="#">Inlays and Onlays</a></li>
            <li><a href="#">Dental bridge</a></li>
            <li><a href="#">Dental crown</a></li>
            <li><a href="#">Root canal therapy</a></li>
            <li><a href="#">Teeth whitening</a></li>
          </ul>
        </li>
          <li><a href="index.php#section1"><strong>Welcome</strong></a></li>
          <li><a href="index.php#section3">About</a></li>
          <li><a href="index.php#section5">Contact</a></li>
          <li><a href="index.php#section6">Feedback</a></li>
        </ul>
      </div>
    </div>
    
</div>

<!--<div class="container">
  <nav class="navbar navbar-default" role="navigation" id="topmenu">
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="#" data-toggle="collapse" data-target="#one">One</a>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="collapse" data-target="#two">Two</a>
      </li>
      <li class="dropdown">
        <a href="#" data-toggle="collapse" data-target="#three">Three</a>
      </li>
    </ul>
  </nav>
</div>-->

<?php 
    navbar();
?>
<div class="container">
  <nav class="navbar navbar-default" role="navigation" id="submenu">
    <ul class="nav navbar-nav collapse" id="one">
      <li><a href="#" id="">One sub 1</a></li>
      <li><a href="#" id="">One sub 2</a></li>
      <li><a href="#" id="">One sub 3</a></li>
      <li><a href="#" id="">One sub 4</a></li>
    </ul>
  </nav>
</div>
    </header>

<!-- Begin page content -->

<div class="container" id="section1">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h2>Please choose a service you desire to perform and then please select a date from calendar to make appointment:</h2>
    </div>
    <div class="row">
     <div class="col-sm-4">
         <p class="text-justify">First column snaskldflS C ALSFG LASDFLASD GFLdnflds flasgj;saf g;asf ;asr glisd laskgn lsdn</p>
     </div>
     <div class="col-sm-4">
         <p class="text-justify">Second jdfslidvn alsfnsdl vaslgn salg nasl aslf nslg;agnlfskg ns ;sgn as;ofwa;pfkPFARTUEW[FICBSLG A</p>
  </div>
     <div class="col-sm-4">
         <p class="text-justify">Drei als die dritte reich ASDFSAFJG AF GLAF;OF OE EFWEOFWPOF E FOIWF lpewnfpi ls vpif</p>
     </div>
  </div>
</div>
</div>
  
    <div class="divider"></div>

<div class="container" id="section2">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="row">
     <div class="col-sm-4">
         <p class="text-justify">First column snaskldflS C ALSFG LASDFLASD GFLdnflds flasgj;saf g;asf ;asr glisd laskgn lsdn</p>
     </div>
     <div class="col-sm-4">
         <p class="text-justify">Second jdfslidvn alsfnsdl vaslgn salg nasl aslf nslg;agnlfskg ns ;sgn as;ofwa;pfkPFARTUEW[FICBSLG A</p>
  </div>
     <div class="col-sm-4">
         <p class="text-justify">Drei als die dritte reich ASDFSAFJG AF GLAF;OF OE EFWEOFWPOF E FOIWF lpewnfpi ls vpif</p>
     </div>
  </div>
</div>
</div>
</div><!--/wrap-->

<div id="footer">
    <?php
        include("/libraries/views/footer.php");
        ?>
</div>

<ul class="nav pull-right scroll-top">
    <li><a href="#" title="Scroll to top">UP</a></li>
</ul>

	<!-- script references -->
		
                <script src="web/js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
                <script src="web/js/scripts.js"></script>
               
               
	</body>
</html>

