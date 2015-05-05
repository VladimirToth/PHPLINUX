
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






<div id="wrap">
  
<!--<header class="masthead">-->
    <header>
<!--    <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h1><a href="#" title="Our page">Dentist</a>
          <p class="lead">{A dentist from another universe}</p></h1>
      </div>
      <div class="col-sm-6">
        <div class="pull-right  hidden-xs">    
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h3>
            <i class="glyphicon glyphicon-cog"></i></h3></a>
          <ul class="dropdown-menu">
              <li><a href="#"><i class="glyphicon glyphicon-chevron-right"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-user"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-lock"></i> Link</a></li>
              <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Link</a></li>
          </ul>
        </div>
      </div>
    </div>
    </div>-->

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
          <li><a href="#section4">Offers</a></li>
          <li><a href="#section2">Our Staff</a></li>
          <li><a href="#">Appointment</a></li>
          <li class="active"><a href="#section1"><strong>Welcome</strong></a></li>
          <li><a href="#section3">About</a></li>
          <li><a href="#section5">Contact</a></li>
          <li><a href="#section6">Feedback</a></li>
<!--          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>-->
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container -->
</div><!--/.navbar -->
    </header>

<script src="web/js/jquery-2.1.3.js"></script>
<script src="web/js/bootstrap.min.js"></script>
  <div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="images/slider/01.jpg" alt="First" width="460" height="345">
        <div class="carousel-caption">
          <h3>First</h3>
          <p>This is the first ever picture in my carousel.</p>
        </div>
      </div>

    <div class="item">
        <img src="images/slider/02.jpg" alt="Second" width="460" height="345">
        <div class="carousel-caption">
          <h3>Second</h3>
          <p>Hi, this si the second picture in carousel.</p>
        </div>
      </div>

    <div class="item">
        <img src="images/slider/03.jpg" alt="Third" width="460" height="345">
        <div class="carousel-caption">
          <h3>Third</h3>
          <p>Hi, this si the third picture in carousel.</p>
        </div>
      </div>

    <div class="item">
        <img src="images/slider/04.jpg" alt="Fourth" width="460" height="345">
        <div class="carousel-caption">
          <h3>Fourth</h3>
          <p>Hi, this si the fourth picture in carousel.</p>
        </div>
      </div>
  </div>
 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: inherit;
  }
  </style>
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- Begin page content -->
<div class="divider" id="section1"></div>
  
<div class="container" id="section1">
  <div class="col-sm-10 col-sm-offset-1">
    <div class="page-header text-center">
      <h1>Thank you for choosing Dentists from another universe.</h1>
    </div>
   
    <p class="lead text-center">
      We welcome you to our dental practice located in the heart of downtown Bratislava.
    </p>
    <p class="text-justify">
      Welcome to Dentists from another universe, a progressive dental clinic in downtown Bratislava 
      that prides itself on expanding the boundaries of excellence in dentistry and customer service. 
      We are always on the leading edge of technology, so that we may always offer you uncompromising 
      care.</p></br>
    <p class="text-justify">
      We want our patients to feel calm and relaxed during each general, cosmetic, and restorative 
      treatment appointment. Our dentists and team members carefully listen to patients and provide 
      sound advice and confident reassurance at all times. In this day and age of fast food and rushed 
      service, we've chosen instead to keep our practice just the opposite: calm, relaxed, 
      and incredibly comfortable. We are always accepting new patients and referrals.
    </p></br>
    <p class="text-justify">
      We are conveniently located in the financial district of Downtown Bratislava inside J&T Building
      in Bevanda Tower 115. We have convenient extended hours 
      and caring team members to make your experience the best it can be!
    </p>
  </div>
</div>
    
<div class="divider" id="section2"></div>
<div class="container">     

</div>

<section class="bg-1">
<!--  <div class="col-sm-6 col-sm-offset-3 text-center">
      <h2 style="padding:20px;background-color:rgba(5,5,5,.8)">
          Try and Tweak Different Layouts</h2></div>-->
<?php display_staffs();
?>
</section>
  
<div class="divider"></div>
   
<div class="container" id="section3">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
      <h1>Mobile-first + Responsive</h1>
      
      <p>
      Instead of creating a unique version of the webpage for each desktop, mobile &amp; 
      tablet, you can now create one design that works on all devices, browsers &amp; 
      resolutions. Your designs will be future ready when a new table or phone size 
      comes in the market, your designs will adapt itself and fit to the new screen size.
      </p>
      
      <hr>
      
      <img src="/assets/example/bg_smartphones.jpg" class="img-responsive">
      
      <hr>
  	</div><!--/col-->
</div><!--/container-->

<div class="divider"></div>
  
<section class="bg-3" id="section4">
  <div class="col-sm-6 col-sm-offset-3 text-center">
      <h2 style="padding:20px;background-color:rgba(5,5,5,.8)">
          Leverage Snippets &amp; Examples</h2></div>
</section>
  
<div class="container bg-4">
	<div class="row">
	   <div class="col-sm-4 col-xs-6">
      
        <div class="panel panel-default">
          <div><img src="//placehold.it/620X250/565656/eee" class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Hacker News</p>
            <p>120k Followers, 900 Posts</p>
            
            <p>
              <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel-->
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/620X250/ffcc33/444" 
                                            class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Bootstrap Templates</p>
            <p>902 Followers, 88 Posts</p>
            
            <p>
              <img src="https://lh5.googleusercontent.com/-AQznZjgfM3E/AAAAAAAAAAI/AAAAAAAAABA/WEPOnkQS_20/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel--> 
      </div><!--/col-->
      
      <div class="col-sm-4 col-xs-6">
      
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><img src="//placehold.it/620X250/f16251/444" 
                                            class="img-responsive"></div>
          <div class="panel-body">
            <p class="lead">Social Media</p>
            <p>19k Followers, 789 Posts</p>
            
            <p>
              <img src="https://lh4.googleusercontent.com/-eSs1F2O7N1A/AAAAAAAAAAI/AAAAAAAAAAA/caHwQFv2RqI/s28-c-k-no/photo.jpg" width="28px" height="28px">
              <img src="https://lh4.googleusercontent.com/-9Yw2jNffJlE/AAAAAAAAAAI/AAAAAAAAAAA/u3WcFXvK-g8/s28-c-k-no/photo.jpg" width="28px" height="28px">
            </p>
          </div>
        </div><!--/panel--> 

      </div><!--/col--> 
	</div><!--/row-->
</div><!--/container-->

<div class="divider" id="section5"></div>

<div class="row">

  <h1 class="text-center">Where to find Us?</h1>

  <div id="map-canvas"></div>
  
  <hr>
  
  <div class="col-sm-8">
      
      <div class="row form-group">
        <div class="col-xs-3">
          <input type="text" class="form-control" id="firstName" name="firstName" 
                 placeholder="First Name" required="">
        </div>
        <div class="col-xs-3">
          <input type="text" class="form-control" id="middleName" name="firstName" 
                 placeholder="Middle Name" required="">
        </div>
        <div class="col-xs-4">
          <input type="text" class="form-control" id="lastName" name="lastName" 
                 placeholder="Last Name" required="">
        </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-5">
          <input type="email" class="form-control" name="email" placeholder="Email" required="">
          </div>
          <div class="col-xs-5">
          <input type="email" class="form-control" name="phone" placeholder="Phone" required="">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
          <input type="url" class="form-control" placeholder="Website URL" required="">
          </div>
      </div>
      <div class="row form-group">
          <div class="col-xs-10">
            <button class="btn btn-default pull-right">Contact Us</button>
          </div>
      </div>
    
  </div>
  <div class="col-sm-3 pull-right">

      <address>
        <strong>Dentist from other World, D.D.S.</strong><br>
        Panonska cesta 17<br>
        Bratislava, 851 04<br>
        Slovakia, Central Europe<br>
        P: (02) 55 56 412
      </address>
    
      <address>
        <strong>Email Us</strong><br>
        <a href="mailto:trainscheduleconfirmation@gmail.com">dentist@example.com</a>
      </address>          
  </div>
  
</div><!--/row-->

<div class="divider" id="section6"></div>
  
<div class="container">
  <div class="col-sm-10 col-sm-offset-1">
    
    <p class="lead text-center">
      Our feedback:
    </p>
    <p class="text-center">
      blablabla
    </p>
  </div>
</div>

<div class="container">
  	<div class="col-sm-8 col-sm-offset-2 text-center">
      <h2>Thank you for visiting our site</h2>
      
      <hr>
      <h4>
        We love templates. We love Bootstrap.
      </h4>
      <p>Get more free templates like this at the <a href="http://bootply.com">Bootstrap Playground</a>
          , Bootply.</p>
      <hr>
      <ul class="list-inline center-block">
        <li><a href="http://facebook.com/bootply"><img src="/assets/example/soc_fb.png"></a></li>
        <li><a href="http://twitter.com/bootply"><img src="/assets/example/soc_tw.png"></a></li>
        <li><a href="http://google.com/+bootply"><img src="/assets/example/soc_gplus.png"></a></li>
        <li><a href="http://pinterest.com/in1"><img src="/assets/example/soc_pin.png"></a></li>
      </ul>
      
  	</div><!--/col-->
</div><!--/container-->
  
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

