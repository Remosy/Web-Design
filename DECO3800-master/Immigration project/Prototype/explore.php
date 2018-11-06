<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>The Immigration | Explore</title>
<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"> 

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/form.css"> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="css/explore.css">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
<scrip src="js/chart.js"></scrip>
</head>

<body>
	<?php include('support/UI/header.php'); ?>
		
	<div class="immi-app-context">
		
		<div class = "row">
			<div id="chartdiv"></div>
			<div id='modifyGraph'>
			<select class="mod" id="y_axis">
					<option value="y-axis">Y-Axis</option>
					<option value="immiNum">Number of Immigrants</option>
					<option value="shipNum">Number of Ships</option>
					<option value=""></option>
				</select>
				<div class="mod" id="y_vs_x">
					<span> vs </span>
				</div>			
				<select class="mod" id="x_axis">
					<option value="x-axis">X-Axis</option>
					<option value="year">Year Range</option>
					<option value=""></option>
					<option value=""></option>
				</select>
				<form class="mod">
					<button id='generateChart' value='generateChart'>Generate</button>
				</form>
			</div>
		</div>

	
	</div>
</body>
</html>

