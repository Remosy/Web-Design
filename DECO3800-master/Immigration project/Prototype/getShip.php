<?php
	include 'connector.php';
	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	
	
	$year = "";
	$ship = "";
	$month = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$arrival = array(array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array(), array());
	$range = $_GET['range'];
	$year = intval(substr($range, (strlen($range) - 2)));
	$query = "SELECT Ship, Date FROM `merged_datasets` WHERE `Date` like '%" . $year . "'";
	$output = "[";
	
	$result = mysqli_query($con, $query);
	
	while ($rs = mysqli_fetch_row($result)) {
		
		for ($i = 0; $i < 12; $i++) {
			if (strpos($rs[1], $month[$i]) !== false) {
				if (in_array($rs[0], $arrival[$i]) == false && strlen($rs[0]) > 0) {
					$arrival[$i][] = $rs[0];
				}
			}
		}
	}
	
	for ($i = 0; $i < 12; $i ++) {
		$output .= '{"Month":"' . $month[$i] . '",';
		$output .= '"Ships": [';
		
		for ($i1 = 0; $i1 < count($arrival[$i]); $i1++) {
			$output .= '{"Ship":"' . $arrival[$i][$i1];
			if ($i1 < (count($arrival[$i]) - 1)) {
				$output .= '"}, ';
			}
		}
		
		if (count($arrival[$i]) == "") {
			$output .= ']}, ';
			} else {
			$output .= '"}]}, ';
		}
	}
	
	
	$output = substr($output, 0, strlen($output) - 2);
	$output .= ']';
	
	$con -> close();
	
	echo($output);
	
?>						