
<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
        include("functions.php");
//    if(isset($_GET['page'])) {
//        switch($_GET['page']) {
//            case "about":
//                $page="about";
//                break;
//            case "contact":
//                $page="contact";
//                break;
//            default: $page='index';
//        }
//    } else {
//        $page="index";
//    }
    include("/libraries/views/head.php");
    ?>
        </head>
        <body>
<!-- Wrap all page content here -->
<script src="web/js/jquery-2.1.3.js"></script>
<div id="wrap">
 
    <header>

<!-- Fixed navbar -->
<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
    <div class="container">
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
          <li class="active"><a href="#">Appointment</a></li>
          <li><a href="index.php#section1"><strong>Welcome</strong></a></li>
          <li><a href="index.php#section3">About</a></li>
          <li><a href="index.php#section5">Contact</a></li>
          <li><a href="index.php#section6">Feedback</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
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
