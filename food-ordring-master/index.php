<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Online Food Order</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Booststrap -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="jQuery_md5.js"></script>

<script src="orderHelper.js"></script>
<script src="loginHelper.js"></script>
<link rel="stylesheet" href="index.css">
</head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
	      <div id="navbar" class="navbar-collapse collapse">
		      
		      <?php
			    if( empty($_SESSION['iuser'])){
					echo('
					<ul class="nav navbar-nav navbar-right">
					<li id="signIn"><a>Log In</a></li>
					<li id="register"><a>Register</a></li>
					</ul>
					');
				}else{
					echo('
					<ul class="nav navbar-nav navbar-right">
					<li id="usr"><a>'."Welcome ".$_SESSION['iuser'].'</a></li>
					<li id="logout"><a href="logOut.php">'.'LogOut'.'</a></li>
					</ul>
					');
				}
			?>
				
          
        </div><!--/.nav-collapse -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Food Order</a>
          <div class="input-group" id="searchBox" style="width: 60%;margin-left: auto;margin-right: auto;">
            	<input id="searchBox" class="form-control" type="text" placeholder="Type Restaurant Name or Number......" onkeyup="liveSearchA(this)" >
            	<span class="input-group-addon" id="basic-addon2">
					
					<span class="glyphicon glyphicon-search"></span>
					
				</span>
            </div>
        </div>
      </div>
    </nav>
	<!-- Fixed navbar End-->
    
    
    <!-- Search Results Panel-->
    <div id="searchResultPanel">
	    <div id="resultLists" class="list-group">
		    
		</div>
    </div>
    <!-- Search Results Panel End-->
        
   

	<!-- Login Box -->
	<div id="loginBox" class="modal fade" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content" style="width: 80%;">
			 	<div class="modal-header">
			 	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			 	<h4 class="modal-title" style="text-align: center;">Log In</h4>
			 	</div>
				<div class="modal-body" >
					<form id="loginForm" action="index.html" accept-charset="utf-8">
						<div class="input-group" id="userName">
							<h5>User Name</h5>
							<input name="userName" type="text" class="form-control">
						</div>
						<div class="input-group" id="password">
							<h5>User Password</h5>
							<input name="password" type="password" class="form-control">
						</div>
						<div class="input-group">
							<a>Forget your Username/Password?</a>
						</div>
					</form>
		  		</div>
		  		<div class="modal-footer">
			  		
		  			<button id="login" type="button" class="btn btn-default">Log In</button>
					<button type="button" class="btn btn-default">Register</button>
		  		</div>
		</div>
	</div>
	<!-- Login Box End-->

  </body>
</html>
