<html lang="en">
	<head>
		<title>Immigration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/shipsvoyages.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" type="text/css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script src="js/shipsvoyages.js" type="text/javascript"></script>
		
	</head>
	<body>
		<?php include('support/UI/header.php'); ?>
		<div class="immi-app-context">
		<div class="main page">
			<section class="brisbane-section">
				
				<div class='shipContent'>
					<table id="shipTable" align='center'>
						<tbody>
							<tr><td>Jan</td>
								<td>Feb</td>
								<td>Mar</td>
								<td>Apr</td>
								<td>May</td>
								<td>Jun</td>
								<td>Jul</td>
								<td>Aug</td>
								<td>Sep</td>
								<td>Oct</td>
								<td>Nov</td>
							<td>Dec</td></tr>
						</tbody>
					</table>
				</div>
				<div class='slide'>
					<form id="sliderForm">
						<table align='center'>
							<tr>
								<td class="emptyRow"></td>
							</tr>
							<tr>
								<td class='yearRange'> 1848 </td>
								<td id="sliderBar"></td>
								<td class='yearRange'> 1917 </td>
							</tr>
							<tr>
								<td class='inputRow'></td>
								<td class='inputRow' id='currentYear'>Year <input type="text" id="year"></td>
								<td class='inputRow'></td>
							</tr>
						</table>
					</form>
				</div>
			</section>
		</div>
		</div>
	</body>
	<?php include('support/UI/footer.php'); ?>
	
</html>
