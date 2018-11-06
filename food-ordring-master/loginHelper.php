<?php
$action = $_GET['action'];
$userName = $_GET['userName'];
$password = $_GET['password'];

if($action == "login"){
   	$sql = "SELECT * FROM users WHERE user = '".$userName."'";
   	$con = mysqli_connect('localhost','root','root','job_test');
   	$result = mysqli_query($con,$sql);
   	$getPass = (mysqli_fetch_array($result))['pwd']; 
   	$hashPwd = md5($getPass);
   	
   	//Check Database password with hashed password 
   	if(mysqli_num_rows($result)==1 && encrptPassword($password) == encrptPassword($hashPwd)){
	   	//echo("pwd =".$hashPwd.">>"."pass =".$password);
	   	print("Y");
	   	session_start();
	   	$_SESSION['iuser'] = $userName;
	   	loginReminder($userName);
   	}
   	mysqli_close($con);
}

//Create its own encrypt methods
function encrptPassword($password){
	return $password."hello";
}

//Login Reminder
function loginReminder($user){
	
	$to = $user;
	require_once  'email.php';
	$subject = "Login Reminder: Do Not Reply";
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= 'From: job_test@foodorder.com' . "\r\n" . 'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}


?>