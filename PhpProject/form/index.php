<!-- Author: Michael Milstead / Mode87.com
	 for Untame.net
	 Twitter Bootstrap Tutorial
	 Modal Contact Demo, 2013
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Twitter Bootstrap Modal Contact Form Demo</title>
	<meta name="description" content="Creating Modal Window with Twitter Bootstrap">

	<link href="assets/bootstrap.min.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script src="assets/bootstrap.min.js"></script>
    <script>
		$(document).ready(function () {
			$("input#submit").click(function(){
				$.ajax({
					type: "POST",
					url: "process.php", // 
					data: $('form.contact').serialize(),
					success: function(msg){
						$("#thanks").html(msg)
						$("#form-content").modal('hide');	
					},
					error: function(){
						alert("failure");
					}
				});
			});
		});
    </script>

	<style type="text/css">
		body { margin: 50px; background: url(assets/bglight.png); }
		.well { background: #fff; text-align: center; }
		.modal { text-align: left; }
	</style>

</head>
<body>

<div class="container">
	<div class="well well-large">
		<h2>Twitter Bootstrap Modal Contact Form Demo</h2>
		<div id="form-content" class="modal hide fade in" style="display: none;">
			<div class="modal-header">
				<a class="close" data-dismiss="modal">×</a>
				<h3>Send me a message</h3>
			</div>
			<div class="modal-body">
				<form class="contact" name="contact">
					<label class="label" for="name">Your Name</label><br>
					<input type="text" name="name" class="input-xlarge"><br>
					<label class="label" for="email">Your E-mail</label><br>
					<input type="email" name="email" class="input-xlarge"><br>
					<label class="label" for="message">Enter a Message</label><br>
					<textarea name="message" class="input-xlarge"></textarea>
				</form>
                            
                            <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(48.148246, 17.107073),
    zoom:15,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="googleMap" style="width:500px;height:380px;"></div>

			</div>
			<div class="modal-footer">
				<input class="btn btn-success" type="submit" value="Send!" id="submit">
				<a href="#" class="btn" data-dismiss="modal">Nah.</a>
			</div>
		</div>
		<div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a></p></div>
	</div>
</div>

</body>
</html>
