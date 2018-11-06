<?php
$action = $_GET['action'];
$event = $_GET['event'];
$order = $_GET['order'];


include('../connectorClass.php');

if($action == "Connect"){
   Distributor($event, $order);
}

function is_event($event){
	return ($event == "ship" ||
			$event == "immigrant" ||
			$event == "ageRange");
}


function Distributor($event, $order){
	//global $event, $order;
	if(!is_event($event)){
		echo ("report_Query_Error"); 
		return false;
	}
	switch ($event) {
	    case "ship":
	        //echo("ship");
	        getShip($order);
	        break;
	    case "immigrant":
	        //echo("immigrant");
	        getImmigrant($order);
	        break;
	    case "ageRange":
	        //echo("ageRange");
	        getAgeRange($order);
	        break;
	}
	return true;
}


function getShip($theOrder){
	
	$query = "SELECT * FROM merged_datasets WHERE Ship = ";
	switch ($theOrder) {
	    case "1":
	        $query .= "'Yarrawonga'";
	        
	        break;
	    case "2":
	        $query .= "'Perthshire'";
	        break;
	    case "3":
	        $query .= "'Reichstag'";
	        break;
	    case "4":
	        $query .= "'Selkirkshire'";
	        break;
	    case "5":
	        $query .= "'Waroonga'";
	        break;
	    case "6":
	        $query .= "'Roma'";
	        break;
	    case "7":
	        $query .= "'Tewkesbury'";
	        break;
	    case "8":
	        $query .= "'Ophelia'";
	        break;
	    case "9":
	        $query .= "'Oruba'";
	        break;
	    case "10":
	        $query .= "'Queen of the Colonies'";
	        break;
	}
	return_InfoGraph_Data($query);
	return $query;
}

function getImmigrant($theOrder){
	
	$query ="SELECT * FROM merged_datasets WHERE Name LIKE ";
	
	switch ($theOrder) {
	    case "1":
	        $query .= "'%George'";
	        break;
	    case "2":
	        $query .= "'%Albert'";
	        break;
	    case "3":
	        $query .= "'%Henry'";
	        break;
	    case "4":
	        $query .= "'%Patrick'";
	        break;
	    case "5":
	        $query .= "'%Richard'";
	        break;
	    case "6":
	        $query .= "'%Michael'";
	        break;
	    case "7":
	        $query .= "'%William'";
	        break;
	    case "8":
	        $query .= "'%Peter'";
	        break;
	    case "9":
	        $query .= "'%Thomas'";
	        break;
	    case "10":
	        $query .= "'%Jane'";
	        break;
	}
	return_InfoGraph_Data($query);
	return $query;

}

function getAgeRange($theOrder){
	$query = "SELECT * FROM merged_datasets WHERE (";
	switch ($theOrder) {
	    case "1":
	        $query .= "(Age like '1') OR (Age like '2') OR (Age like '3') OR (Age like '4') OR (Age like '5') OR"
	        		." (Age like '6') OR (Age like '7') OR (Age like '8') OR (Age like '9') OR (Age like '10')";
	        break;
	    case "2":
	        $query .= "(Age like '11') OR (Age like '12') OR (Age like '13') OR (Age like '14') OR (Age like '15') OR"
	        		." (Age like '16') OR (Age like '17') OR (Age like '18') OR (Age like '19') OR (Age like '20')";
	        break;
	    case "3":
	        $query .= "(Age like '21') OR (Age like '22') OR (Age like '23') OR (Age like '24') OR (Age like '25') OR"
	        		." (Age like '26') OR (Age like '27') OR (Age like '28') OR (Age like '29') OR (Age like '30')";
	        break;
	    case "4":
	        $query .= "(Age like '41') OR (Age like '42') OR (Age like '43') OR (Age like '44') OR (Age like '45') OR"
	        		." (Age like '46') OR (Age like '47') OR (Age like '48') OR (Age like '49') OR (Age like '50')";
	        break;
	    case "5":
	        $query .= "(Age like '51') OR (Age like '52') OR (Age like '53') OR (Age like '54') OR (Age like '55') OR"
	        		." (Age like '56') OR (Age like '57') OR (Age like '58') OR (Age like '59') OR (Age like '60')";
	        break;
	    case "6":
	        $query .= "(Age like '61') OR (Age like '62') OR (Age like '63') OR (Age like '64') OR (Age like '65') OR"
	        		." (Age like '66') OR (Age like '67') OR (Age like '68') OR (Age like '69') OR (Age like '70')";
	        break;
	    case "7":
	        $query .= "(Age like '71') OR (Age like '72') OR (Age like '73') OR (Age like '74') OR (Age like '75') OR"
	        		." (Age like '76') OR (Age like '77') OR (Age like '78') OR (Age like '79') OR (Age like '80')";
	        break;
	    case "8":
	        $query .= "(Age like '81') OR (Age like '82') OR (Age like '83') OR (Age like '84') OR (Age like '85') OR"
	        		." (Age like '86') OR (Age like '87') OR (Age like '88') OR (Age like '89') OR (Age like '90')";
	        break;
	}
	$query.=")";
	//return_InfoGraph_Data($query);
	return $query;
}

function return_InfoGraph_Data($query){
	//echo($query);
	$mysqli = new Connector();
	$check_connection = $mysqli -> Connection();
	//echo($check_connection);
	if($check_connection == "report_Connect_Error"){echo("report_Connect_Error");}
	else{
		$results = $mysqli -> Query_Results($query);
		//print_r(json_encode($results));
				
		try{
			print_r(json_encode($results));
			return true;
		}catch(Exception $e){
			return false;
		}
		/*
		if($results!=null){
			return true;
		}else{
			return false;
		}*/
		
		
	
	}
}

function MakeDialog_for_InfoGraph(){
	 	echo 
	 	"
	 	<div id='dialog-report-error' style='display:none;'>
	 	<p>
	 	<img src='img/robot.png' width='60' height='60'>OOPS! There was an error.</p>
	 	</div>
	 	";
}
?>