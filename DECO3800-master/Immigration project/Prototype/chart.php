<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>The Immigration</title>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="js/searchBar.js"></script>
<!--Chart Plugin From Google-->
<script type="text/javascript">
	  google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Age Destribution on 14 Nov 1901'],
          ['Age:19',     18],
          ['Age:18',      19],
          ['Age:20',  20],
        ]);
        
       var data2 = google.visualization.arrayToDataTable([
          ['Task', 'Ship Destribution on 14 Nov 1901'],
          ['Otranto',     25],
          ['Dacca',      19],
          ['Shakespear',  20],
        ]);

        var options = {
          title: 'Age Destribution on 14 Nov 1901'
        };
        var options2 = {
          title: 'Ship Destribution on 14 Nov 1901'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));

        chart.draw(data, options);
        chart2.draw(data2, options2);
      }
</script>
<style>
	#ResultPanel{			
		margin-left: 3em;
	}

</style>

</head>

<body>
		<?php include('header.php'); ?>
		
		<!--Click the search icon on the right top of window, this will slide on right side of window-->
	   	<div id="searchBar">
			<form>
			<div id="section">
				<section>
						<label for="input_lastName">Last Name</label>
						<br>
						<input id="input_lastName" name="lastName" type="text" placeholder="Optional" maxlength="32"/>
				</section>
				<section>
						<label for="input_firstName">First Name</label>
						<br>
						<input id="input_firstName" name="firstName" type="text" placeholder="Optional" maxlength="32"/>
				</section>		
				<section>
						<label for="input_shapName">Date</label>
						<br>
						<select>
						<option value="volvo">20</option>
						<option value="opel">21</option>
						<option value="audi">22</option>
						</select>
						/
						<select>
						<option value="volvo">April</option>
						<option value="opel">May</option>
						<option value="audi">Jun</option>
						</select>
						/
						<select>
						<option value="volvo">1887</option>
						<option value="opel">1888</option>
						<option value="audi">1889</option>
						</select>
				</section>
				
				<section>
						<label for="input_shipName">Ship Name</label>
						<input id="input_shipName" name="shipName" type="text" placeholder="Optional" maxlength="10"/>
				</section>
				
				<section>
						<label for="input_Age">Age</label>
						<br>
						<input id="input_Age" name="age" type="text" placeholder="Optional" maxlength="3"/>
				</section>		
				<section>	
						<label for="input_applicant">Applicant</label>
						<br>
						<input id="input_applicant" name="applicant" type="text" placeholder="Optional" maxlength="32"/>
				</section>		
				<section>
						<label for="input_QSA">QSA Item ID</label>
						<br>
						<input id="input_QSA" name="QSA_ID" type="text" placeholder="Optional" maxlength="12"/>
				</section>		
				<section> 
						<input type="submit" value="Search" id="search">
				</section>	
				
			</div>
			</form>
		</div>
		
		<!--This will show the chart information-->
		<div id="ResultPanel">
			 <div id="piechart"></div>
			 <p>The biggest portion is Age = 20</p>
			 <p>The smallest portion is Age = 19</p>
			 <p>Ages includes: 18, 19, 20</p>
			 <div id="piechart2"></div>
			 <p>The biggest portion is Otranto</p>
			 <p>The smallest portion is Shakespear</p>
			 <p>Ships includes: Otranto, Shakespear, Dacca</p>
		</div>
		
	
	
</body>
</html>

