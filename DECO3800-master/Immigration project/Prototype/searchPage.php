<?php include('support/UI/header.php'); ?>

<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>The Immigration | Search</title>
<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css"> 
<link type="text/css" rel="stylesheet" href="css/jquery.nstSlider.css">
<link rel="stylesheet" href="css/search.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<!-- Boostrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<!-- Year Range -->
<script src="js/jquery.nstSlider.min.js"></script>
<!-- Search Effect -->
<script src="js/search.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- Data Table -->
<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
<!-- Search Database-->
<script src="js/connect.js"></script>



</head>
<?php include('support/search/searchHelper.php');?>
<body>
	<div class="immi-app-context">
		<div id="alertPanel" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<section class="modal-header">
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</section>
					<div class="modal-body">
						<p class="text-warning"></p>
					</div>
				</div>
			</div>
		</div> 
		<div "searchForm">		
			<h1 id="searchTitle"> Search Immigration Data</h1>
			<form class="form-horizontal" role="form">	
					<div class="form-group">
					    <label class="control-label col-sm-2" for="lastName">Family Name:</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name" onkeyup="checkInput(this)"/>
					    </div>
					</div>
				  
					<div class="form-group">
					    <label class="control-label col-sm-2" for="fname">Other Name:</label>
					    <div class="col-sm-10"> 
					      <input type="text" class="form-control" name="otherName" id="otherName" placeholder="Enter other name" onkeyup="checkInput(this)"/>
					    </div>
					</div>
				  
					<div class="form-group year"> 
						<label class="control-label col-sm-2" for="year">Year:</label>
						<div class="col-sm-10"> 
						<input type="text"  class="form-control" name="year" id="year" title="Optional" onkeyup="checkInput(this)"/>
						</div>
						<div class="col-sm-10"> 
						<!--<div class="ui-field-contain" >-->
							<div id="yearRange" class="nstSlider" data-range_min="1848" data-range_max="1917" data-cur_min="1850" data-cur_max="1900">
								<div class="bar"></div>
								<div class="leftGrip"></div>
								<div class="rightGrip"></div>
							</div>
						</div>
					</div>
				
					<div class="form-group">
						<label class="control-label col-sm-2" for="date">Month:</label>
						<div class="col-sm-10">
							<select class="form-control" name="month" id="month" title="Optional" onchange="checkInput(this)" size="1">
								<option>&nbsp&nbsp&nbsp&nbsp Month</option>
								<option value="Jan">&nbsp&nbsp&nbsp&nbsp January</option>
								<option value="Feb">&nbsp&nbsp&nbsp&nbsp February</option>
								<option value="Mar">&nbsp&nbsp&nbsp&nbsp March</option>
								<option value="Apr">&nbsp&nbsp&nbsp&nbsp April</option>
								<option value="May">&nbsp&nbsp&nbsp&nbsp May</option>
								<option value="Jun">&nbsp&nbsp&nbsp&nbsp June</option>
							    <option value="Jul">&nbsp&nbsp&nbsp&nbsp July</option>
								<option value="Aug">&nbsp&nbsp&nbsp&nbsp August</option>
							    <option value="Sep">&nbsp&nbsp&nbsp&nbsp September</option>
								<option value="Oct">&nbsp&nbsp&nbsp&nbsp October</option>
								<option value="Nov">&nbsp&nbsp&nbsp&nbsp November</option>
								<option value="Dec">&nbsp&nbsp&nbsp&nbsp December</option>
							</select>	
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-2" for="date">Day:</label>
						<div class="col-sm-10">
							<input type="text"  class="form-control" name="day" id="day" maxlength="2" placeholder="[day] e.g. 4" title="Optional" onkeyup="checkInput(this)"/>
						</div>
					</div>
				
				    <div class="form-group"> 
						<label class="control-label col-sm-2" for="pwd">Ship Name:</label>
						<div class="col-sm-10"> 
						<input type="text" class="form-control" id="shipName" name="shipName" onkeyup="checkInput(this)"/>
						</div>
					</div>
					
				    <div class="form-group"> 
						<label class="control-label col-sm-2" for="pwd">Age:</label>
						<div class="col-sm-10"> 
						<input type="number" class="form-control age" id="age" name="age" min="0" max="100" step="10" onkeyup="checkInput(this)"/>
						</div>
				    </div>
				    
				    <div class="form-group"> 
						<label class="control-label col-sm-2" for="pwd">Applicant:</label>
						<div class="col-sm-10"> 
						<input type="text" class="form-control" id="applicant" name="applicant" onkeyup="checkInput(this)"/>
						</div>
				    </div>
				    <div class="form-group"> 
					    <div class="col-sm-10"> 
						<img src="img/loading.gif" class="load_image" style="display: none" height="50px" width="50px" alt="loading">
					    </div>
				    </div>
				   
				    <div class="form-group"> 
					    <div class="col-sm-10">
						<button type="button" style="color: white;" id="searchData" value="RESEARCH" name="requestRecords" class="requestRecords" onclick="userInput()">RESEARCH</button>
					    <button type="reset" style="color: white;" value="RESET ALL" name="searchAgain" class="searchAgain">RESET ALL</button>
					    </div>
				    </div>
			</form>
			<?php
				MakeDialog();
			?>	
		</div>
		
		<div id="searchResult">
			<section>
				<p class="text-muted">A fuller record may be obtained by ordering from Queensland State Archives.<br/> Select the entry and click ‘REQUEST RECORDS’ to order a copy of the full entry</p>
					<input type="button" value="REQUEST RECORDS (EMAIL)" name="requestRecords" class="requestRecords" onclick="request_Records_Email(this)"/>
					<input type="button" value="SEARCH AGAIN" name="searchAgain" class="searchAgain"/>
			</section>
				
			<div>
				<table id="resultTable" class="display" cellspacing="0" width="100%">
			        <thead>
			            <tr>
				            <th>Id</th>
			                <th>Name</th>
			                <th>Age</th>
							<th>Ship</th>
			                <th>Date</th>
			                <th>Page</th>
			                <th>QSA Item ID</th>
			                <th>Microfilm_1</th>
			                <th>Microfilm_2</th>
			                <th>Applicant</th>
			                <!--<th>Dataset</th>-->
			            </tr>
			        </thead>
			        <tfoot>
			            <tr>
				            <th>Id</th>
			                <th>Name</th>
			                <th>Age</th>
			                <th>Ship</th>
			                <th>Date</th>
			                <th>Page</th>
			                <th>QSA Item ID</th>
			                <th>Microfilm_1</th>
			                <th>Microfilm_2</th>
			                <th>Applicant</th>
			                <!--<th>Dataset</th>-->
			            </tr>
			        </tfoot>
	    	</table>
			</div>
		<form>
		<section>
		<input type="button" value="REQUEST RECORDS  (POST)" name="requestRecords" class="requestRecords" onclick="request_Records_Post(this)"/>
		<input type="button" value="SEARCH AGAIN" name="searchAgain" class="searchAgain"/>
		</section>
		</form>
	</div>

	<?php include('support/UI/footer.php'); ?>
</body>
</html>

