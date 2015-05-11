
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
            <li><a href="appointment.php#section1">Inlays and Onlays</a></li>
            <li><a href="appointment.php#section1">Dental bridge</a></li>
            <li><a href="appointment.php#section1">Dental crown</a></li>
            <li><a href="appointment.php#section1">Root canal therapy</a></li>
            <li><a href="appointment.php#section1">Teeth whitening</a></li>
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

    </header>

<!--Begin page content--> 
<div class="container" id="section1">
    <?php
   
    ?>
</div>

<div class="divider"></div>

<div class="container" id="section2">
       <form method="post">
  <div class="dropdown">
    <label>
        <select name="dropdown" class="textfields" id="nameServices">
            <option>Choose service</option>
            <?php
            
            
            ?>
    </label>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail">Email address</label>
    <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone">Phone number</label>
    <input type="tel" class="form-control" id="InputPhone" placeholder="Enter phone number">
  </div>
  <div class="form-group">
    <label for="exampleInputDate">Date</label>
    <input type="date" id="InputDate">
  </div>
  <div class="dropdown">
    <label>
        <select name="dropdown" class="textfields" id="nameDoctors">
            <option>Choose dentist</option>
            <?php
            
            ?>
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>


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

