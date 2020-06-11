<!DOCTYPE html>
<html>
<?php include 'head.html.php'; ?>
<head>
	<title>Christien Kelly</title>
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
	
		<!-- idk how many  breaks to put in here, we can experiment -->
<div class="main">

	<div class = "box_profile">
		<img src="photos/business_profile.png">
		<!--Photo-->
		<h4>Christien Kelly</h1>
		<h5>Data Scientist/Data Journalist</h5>
		<br>
		<h5><a href="ChristienKelly–Resume.pdf" download><li>Resume</li></a></h3>
		<br>
		<p id="bio">Hi! 👋🏾, I'm Christien Kelly - I'm a Data Scientist (recent graduate from Denison University 🎉).
		Co-Founder of <b>Globe Ups</b> 🌎, a news curation platform dedicated to sharing global data stories with young adults.</p>
		<br>
		<br>
	</div>

	<!-- have arrow disappear as I scroll,
		this can be commented out for now. Add the projects later. -->
	<!--

	<p style="text-align: center" class="arrow">Ding Dong Ding Dong<i class="fas fa-angle-double-down"></i></p>
	<div class="box"> 
		<h1>Projects</h1>
		<ul class = "filters">
			<li>Filters</li>
			<li><button>Resume</button></li>
			<li><button>About</button></li> 
			 dash here? 

			<li><button>LinkedIn</button></li>
			<li><button>Github</button></li>
		</ul>


		<table class = "project">
			<tr>
				<td rowspan="2">Title</td>
				<td rowspan="2">Date</td>
			</tr>

			<tr>
				<td rowspan="2">
				<p>Some stuff here a brief summary about a project blah blah blah, I worked hard and learned alot. </p>
				</td>
				<td rowspan="2">
				<a href="More"><u>Read More</u></a>	
				</td>
			</tr>
		</table>
		<br>
		<br>
		list out projects one by one, tag them so that they can be filtered.	
	</div> UNCOMMENT PROJECTS HERE
	</div> -->
	<?php include 'footer.html.php'; ?>
</body>
</html>