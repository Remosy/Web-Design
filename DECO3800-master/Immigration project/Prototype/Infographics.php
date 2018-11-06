<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Immigration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/onepage-scroll.css">
		<link rel="stylesheet" type="text/css" href="css/Infographics.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/jquery.onepage-scroll.js"></script>
		<script src ="js/infographics.js"></script>
		<script src="js/connect.js"></script>
		<!-- Data Table -->
		<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
		
		
	</head>
	<body>
		<div id="dataPanel" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<section class="modal-header">
							<input type="button" value="REQUEST RECORDS (EMAIL)" name="requestRecords" class="requestRecords" onclick="request_Records_Email(this)"/>
							<input type="button" value="REQUEST RECORDS  (POST)" name="requestRecords" class="requestRecords" onclick="request_Records_Post(this)"/>
							 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</section>
					<div class="modal-body">
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
				</div>
			</div>
		</div> 
		
		<div class="main page">
			<section class="brisbane-section">
				<div class="container">
					<div class="page-header">
						<img src="img/qsa-logo.gif" alt="QSA logo"></img>
					</div>
					<div class="agency">
						<table width ="100%" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td align="left">
										<img src="img/qsa-agency.gif" alt="QSA logo"></img>
									</td>
									<td align="right">
										<img src="img/agencyname.gif" alt="QSA logo"></img>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>      
								
							</button>
							
						</div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Explore <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Graphs and Charts</a></li>
										<li><a href="infographics.php">Infographics</a></li>
										
									</ul>
								</li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" href="#">Timeline<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="shipVoyages.html">Ship's Voyages</a></li>
									</ul>
								</li>
								<li><a href="about.php">About Us</a></li>
								<li class ="search"><a href="searchPage.php">Search<img src= "img/search.png" alt="search icon"></a></img></li>	
							</ul>
						</div>
					</div>
				</nav>
				<div class="section-container">
					<div class="top-section-brisbane">
						<img src="img/infograph_img/main-title.png" alt="Brisbane title">
					</div>
					<div class="brisbane-map">
						<table id="center">
							<tr>
								<td id="immi-row">
								<marquee class="move" id="shipMarquee" direction="left" behavior="scroll"><a href="#" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Total of 312326 immigrants & 678 different types of ships has been recorded"><img id = "immis" src="img/infograph_img/Immigrants.png" alt="Immigrants icon" onmouseover="document.getElementById('shipMarquee').stop();" onmouseout="document.getElementById('shipMarquee').start();"></a></td>
								</marquee>
							</tr>
						</table>
					</div>
				</div>
			</section>
	
			<section class="ship-section">
				<div class="section-container">
					<div class="top-section">
						<img src="img/infograph_img/ships-title2.png" alt = "ships title">
					</div>
					<div class="ships">
						<table>
							<tr>
								<td id="ship1" data-toggle="modal" datatarget="#dataPanel" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship2" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship3" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship4" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship5" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
							</tr>
							<tr>
								<td><a href=""><span>1.Ship's Name </span></a></td>
								<td><a href=""><span>2. Ship's Name</span></a></td>
								<td><a href=""><span>3. Ship's Name</span></a></td>
								<td><a href=""><span>4. Ship's Name</span></a></td>
								<td><a href=""><span>5. Ship's Name</span></a></td>
							</tr>
							<tr>
								<td id="ship6" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship7" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship8" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td	id="ship9" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
								<td id="ship10" onclick="getShipName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Ship.png" alt="Immigrant icon"></a></td>
							</tr>
							<tr>
								<td><a href=""><span>6. Ship's Name</span></a></td>
								<td><a href=""><span>7. Ship's Name</span></a></td>
								<td><a href=""><span>8. Ship's Name</span></a></td>
								<td><a href=""><span>9. Ship's Name</span></a></td>
								<td><a href=""><span>10. Ship's Name</span></a></td>
							</tr>
						</table>
					</div>
				</div>
			</section>
			
				<section class="immi-section">
				<div class="section-container">
					<div class="top-section-immi">
						<img src="img/infograph_img/immi-title.png" alt = "immigration title">
					</div>
					<div class="immigrants">
						<table>
							<tr>
								<td id="immigrant1" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant2" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant3" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant4" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant5" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								
							<tr>
								<td><a href=""><span>1. First Name </span></a></td>
								<td><a href=""><span>2. First Name </span></a></td>
								<td><a href=""><span>3. First Name </span></a></td>
								<td><a href=""><span>4. First Name </span></a></td>
								<td><a href=""><span>5. First Name </span></a></td>
							</tr>
							<tr>
								<td id="immigrant6" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant7" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant8" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant9" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
								<td id="immigrant10" onclick="getImmigrantName(this)"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="top" data-content="*Insert Number*"><img src="img/infograph_img/Immigrant.png" alt="Immigrant icon"></a></td>
							</tr>
							</tr>
								<td><a href=""><span>6. First Name </span></a></td>
								<td><a href=""><span>7. First Name </span></a></td>
								<td><a href=""><span>8. First Name </span></a></td>
								<td><a href=""><span>9. First Name </span></a></td>
								<td><a href=""><span>10. First Name </span></a></td>
							<tr>
							</tr>
						</table>
					</div>
				</div>
			</section>
			<section class="age-section">
				<div class="section-container">
					<div class="top-section">
						<img src="img/infograph_img/age-title.png" alt = "age title">
					</div>
					<div class="age">
						<table>
							<tr>
								<td id="ageRange1" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="*Insert Number*"><span>Age 0-10</span></a></td>
								<td rowspan="8"><img src="img/infograph_img/immigrants2.png" alt="Immigrant icon"></a></td>
								<td id="ageRange2" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="*Insert Number*"><span>Age 11-20</span></a></td>
							</tr>
							<tr>
								<td><br></td>
								
							</tr>
							<tr>
								
								<td id="ageRange3" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="*Insert Number*"><span>Age 21-30</span></a></td>
								<td id="ageRange4" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="*Insert Number*"><span>Age 41-50</span></a></td>
							</tr>
							<tr>
								<td><br></td>
								
							</tr>
							<tr>
			
								<td id="ageRange5" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="*Insert Number*"><span>Age 51-60</span></a></td>
								<td id="ageRange6" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="*Insert Number*"><span>Age 61-70</span></a></td>
							</tr>
							<tr>
								<td><br></td>
								
							</tr>
							<tr>
								
								<td id="ageRange7" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="*Insert Number*"><span>Age 71-80</span></a></td>
								<td id="ageRange8" onclick="getAgeRange(this)" class="color"><a title="Number of immigrants" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="*Insert Number*"><span>Age 81-90</span></a></td>
							</tr>
							
						</table>
					</div>
				</div>
			</section>
			<section class="year-section">
				<div class="section-container">
					<div class="top-section">
						<a href=""><img src="img/infograph_img/year-title3.png" alt = "year title"></a>
					</div>
					<div class="year">
						<table>
							<tr>
								<td rowspan="4"><img src="img/infograph_img/immigrants3.png" alt="Immigrant icon"></a></td>
								<td class="add" rowspan="1" ></td>
							
								<td class="color"><a href=""><span>Adults(Age 21 & above) : 12766</span></a></td>
							</tr>
							<tr>
								<td class="add" rowspan="1" ></td>
								<td class="color"><a href=""><span>Children(Age 21 & above): 13364</span></a></td>				
							</tr>
							<tr>	
								<td class="add" rowspan="1" ><img src="img/infograph_img/add.png" alt="Add icon"></td>
								<td class="color"><a href=""><span>Unrecorded Age: 1450</span></a></td>
							</tr>
						
							<tr>
								<td rowspan="1" ></td>
								<td class="color" id = "border"><a href=""><span>27580 immigrants</span></a></td>
							</tr>
						</table>
					</div>
				</div>
			</section>
		</div>
		<?php
				MakeDialog_for_InfoGraph();
				include('support/UI/footer.php');
			?>
	</body>
</html>
	
