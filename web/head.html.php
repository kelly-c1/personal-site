<!DOCTYPE html>
<html>
<head>
	<title>Christien Kelly</title>
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="footer/css/font-awesome/css/font-awesome.min.css">
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
	<!-- This enables jQuery, this snipet of code uses the online API of JQuery -->
	<script type="text/javascript">
		// JQuery lives inside this function.
		$(document).ready(function(){
  		// make it so the downwards arrows disappear as you scroll.
  			$(window).scroll(function() {
				if ($(document).scrollTop() > 10) {
    				$('.arrow').slideToggle(1000);}
  		//Showing and hiding projects, use the Fadetoggle command.

		});

	</script>
</head>
<body>
	<!-- Building the  header navigation Best navigation: https://youtu.be/GxwHXxumdQk-->
<div class = "header">
		
	<div class = "inner_header">

		<div class = "logo_container">
				<h1><span>Christien</span>Kelly</h1>
				<!--<img src='logo.png'/>-->	
		</div>

		<ul class = "navigation">
			
			<!-- <a href="about.html"><li>About</li></a> -->
			<!-- dash here? -->
			<a href="https://www.linkedin.com/in/christien-k-770080107/"><li><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></li></a>
			<a href= "https://github.com/kelly-c1" ><li><i class="fa fa-github fa-lg" aria-hidden="true"></i></li></a>
			<a href = "mailto:kelly_c1@denison.edu"><li><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></li></a>
		</ul>
	</div>
</div>
</body>
</html>