<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta http-equiv="CACHE-CONTROL" content="no-cache">
<meta name="author" content="TheImmigration">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>The Immigration | Timeline</title>
<link href="img/favicon.ico" type="image/x-icon" rel="shortcut icon"> 

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/carousel.css">
<link rel="stylesheet" href="css/timeline.css" type="text/css" media="screen">
<!--<link rel="stylesheet" href="../js/vendor/venobox/venobox.css" type="text/css" media="screen">-->
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>

<body>
		<?php include('support/UI/header.php'); ?>
		
	   <div class="immi-app-context">
			
		<h1>Timeline</h1>
		<h2><span class="step1"></span>Immi<span class="step2">gration</span> <span class="step3">Special Events</span></h2>
	
	
		<div id="timeline" class="timeline-container">

			<button class="timeline-toggle">+ expand all</button>

			<br class="clear">

			<div class="timeline-wrapper">
				<h2 class="timeline-time"><span>1848</span></h2>
				<dl class="timeline-series">
					<span class="tick tick-before"></span>
					<dt id="ship" class="timeline-event"><a>Ship</a></dt>
					<span class="tick tick-after"></span>
					<dd class="timeline-event-content" id="shipEX">
						

						<blockquote>
							<p>Recorded highest number of ships</p>
							<p>2392 ships were used to immigrate</p>
							<p>Percentage: 35%</p>
							
						</blockquote>

					<br class="clear">
					</dd><!-- /.timeline-event-content -->
					

				</dl><!-- /.timeline-series -->
			</div><!-- /.timeline-wrapper -->


			<div class="timeline-wrapper">
				<h2 class="timeline-time"><span>1854</span></h2>
				<dl class="timeline-series">
					<span class="tick tick-before"></span>
					<dt id="immigrant" class="timeline-event"><a>Immigrant</a></dt>
					<span class="tick tick-after"></span>
					<dd class="timeline-event-content" id="immigrantEX">
						

						<blockquote>
							<p>Recorded highest number of immigrants</p>
							<p>1401 immigrants arrived in Brisbane</p>
							<p>Percentage: 40%</p>
						</blockquote>
					<br class="clear">
					</dd><!-- /.timeline-event-content -->

			

				</dl><!-- /.timeline-series -->
			</div><!-- /.timeline-wrapper -->

			<div class="timeline-wrapper">
				<h2 class="timeline-time"><span>1873</span></h2>
				<dl class="timeline-series">
					<span class="tick tick-before"></span>
					<dt id="infant" class="timeline-event"><a>Infant</a></dt>
					<span class="tick tick-after"></span>
					<dd class="timeline-event-content" id="infantEX">

						<div class="media">
							
						</div><!-- /.media -->

						<blockquote>
							<p>Recorded highest number of infants</p>
							<p>141 infants arrived</p>
							<p>Percetage: 55%</p>
							
						</blockquote>
					<br class="clear">
					</dd><!-- /.timeline-event-content -->
				</dl><!-- /.timeline-series -->

			</div><!-- /.timeline-wrapper -->

			<div class="timeline-wrapper">
				<h2 class="timeline-time"><span>1894</span></h2>
				<dl class="timeline-series">
					<span class="tick tick-before"></span>
					<dt id="seniors" class="timeline-event"><a>Senior Citizen</a></dt>
					<span class="tick tick-after"></span>
					<dd class="timeline-event-content" id="seniorsEX">

						<div class="media">
							<!-- <a href="img/event-singularity-woah.gif"></a> -->
							
						</div><!-- /.media -->

						<blockquote>
							<p>Recorded highest number of senior citizen</p>
							
						</blockquote>
					<br class="clear">
					</dd><!-- /.timeline-event-content -->
				</dl>
			</div>
			
			<div class="timeline-wrapper">
				<h2 class="timeline-time"><span>1901</span></h2>
				<dl class="timeline-series">
					<span class="tick tick-before"></span>
					<dt id="adult" class="timeline-event"><a>Adult</a></dt>
					<span class="tick tick-after"></span>
					<dd class="timeline-event-content" id="adultEX">

						<div class="media">
							<!-- <a href="img/event-singularity-woah.gif"></a> -->
							
						</div><!-- /.media -->

						<blockquote>
							<p>Recorded highest number of adults</p>
							
						</blockquote>
					<br class="clear">
					</dd><!-- /.timeline-event-content -->
				</dl>
			</div>

			<button class="timeline-toggle">+ expand all</button>

			<br class="clear">

		</div><!-- /#timeline -->

	
		<div class="immi-app-context">
	<!-- GLOBAL CORE SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/vendor/venobox/venobox.min.js"></script>
	<script type="text/javascript" src="js/timeliner.js"></script>
	<script>
		$(document).ready(function() {
			$.timeliner({
				timelineContainer:'#timeline',
			});
			$('.venobox').venobox();
		});

	</script>

	
	
</body>
</html>

