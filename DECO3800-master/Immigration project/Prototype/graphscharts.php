<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Immigration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/graphscharts.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
		<script type="text/javascript" src="http://www.amcharts.com/lib/3/pie.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/graphscharts.js"></script>
	</head>
	<body>
		<?php include('support/UI/header.php'); ?>
		<div class="main-page">
			<section class="brisbane-section">
				
				<div id='modifyGraph'>
					<select class="mod" id="y_axis">
						<option value="y-axis">Y-Axis</option>
						<option value="immiNum">Number of Immigrants</option>
						<option value="shipNum">Number of Ships</option>
						<option value="childNum">Number of Children</option>
						<option value="childNum">Number of Adults</option>
					</select>
					<div class="mod" id="y_vs_x">
						<span> vs </span>
					</div>			
					<select class="mod" id="x_axis">
						<option value="x-axis">X-Axis</option>
						<option value="year">Year Range</option>
						<option value="age">Age Range</option>
						<option value=""></option>
					</select>
					<div class="mod" id='generateChart'>
						<span>Generate</span>
					</div>
				</div>
				<div class="chartdiv" id='hide'>
					<div class='chart' id="linechart"></div>
					<div class='chart' id="piechart"></div>
				</div>
				<div class="chartNote" id='hide'><span>*Graphs are generated based on the available records in the datasets</span></div>
			</section>
		</div>
		<?php include('support/UI/footer.php'); ?>
	</body>	
	