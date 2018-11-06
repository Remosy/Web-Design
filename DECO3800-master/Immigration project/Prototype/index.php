<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>The Immigration</title>
<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"> 


<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type='text/javascript' src="js/homePage.js"></script>
  <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
  <!--<script src="jquery-sectionsnap.js" type="text/javascript"></script>-->
</head>


<body>
	<?php include('support/UI/header.php'); ?>
	<div class="immi-app-context">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/visualization.png"  alt="Image"  >
						<div class="carousel-caption">
							<h2>Visualizing immigration <font color="#FFA339">history</font></h2>
							<div class="carousel-button">
								<a href=""><button type="button" class="btn btn-default">Explore more >></button></a>
							</div>
						</div>      
					</div>
					
					<div class="item">
						<img src="img/timeline.jpg" class="img-responsive" alt="Image">
						<div class="carousel-caption">
							<h2>Discovering the <font color="#FFA339">past</font> through infographics</h2>
							<div class="carousel-button">
								<a href="../html/Infographics.html"><button type="button" class="btn btn-default">Learn more >></button></a>
							</div>
						</div>      
					</div>
					<div class="item">
						<img src="img/family.jpg" class="img-responsive" alt="Image">
						<div class="carousel-caption">
							<h2>Connecting <font color="#FFA339">people</font> to the past</h2>
							<div class="carousel-button">
								<a href="../html/Search.html"><button type="button" class="btn btn-default">Search more >></button></a>
							</div>
						</div>      
					</div>
				</div>
				
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
			
			
	<div class='infoContainer'>
				<h3>Uncover and find trends</h3><br>
				
				<div class='infoSection defSection' id='defSection' style="background-image:url('img/data-visualization.jpg');">
					<div class="overlay">
						<h2>Charts and graphs</h2>
						<p class= "description">Relationships between <br>immigrants, ships, year and age</p>
						<button type="button" class="btn btn-default"><a href="#">Learn more</a></button>
					</div>
				</div>
				
				<div class='infoSection' style="background-image:url('img/ship.jpg');">
					<div class="overlay">
						<h2>Tour the ships voyages</h2>
						<p class= "description">Take an interactive tour of ship's voyages <br>from 1848-1917</p>
						<button type="button" class="btn btn-default"><a href="">Learn more</a></button>
					</div>
				</div>
				
				<div class='infoSection' style="background-image:url('img/timeline-icon.png');">
					<div class="overlay">
						<h2>Immigration records order</h2>
						<p class= "description">Assisted Immigrants 1848-1912,<br> Registered of Immigrants 1864-1878,<br>and Registered of Immigrants,Brisbane 1885-1917</p>
						<button type="button" class="btn btn-default"><a href="#">Learn more</a></button>
					</div>
				</div>
				
				<div class='infoSection' style="background-image:url('img/timeline-icon.png');">
					<div class="overlay">
						<h2>Infographics</h2>
						<p class= "description">Graphic visual representations of immigration data<br>&nbsp;</p>
						<button type="button" class="btn btn-default"><a href="../html/Infographics.html">Learn more</a></button>
					</div>
				</div>
				
				<div class='infoSection' style="background-image:url('img/timeline-icon.png');">
					<div class="overlay">
						<h2>Search datasets</h2>
						<p class= "description">Our advance search tool is designed <br>to search immigration data</p>
						<button type="button" class="btn btn-default"><a href="../html/Search.html">Learn more</a></button>
					</div>
				</div>
			</div>
			<br><br>
	</div>	
	
	<?php include('support/UI/footer.php'); ?>
		
		
  

</body>
</html>

