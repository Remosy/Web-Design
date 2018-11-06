function unverified(){
	$('#userName').addClass('form-group has-error has-feedback');
	$('#password').addClass('form-group has-error has-feedback');
}

function login(){
	var userName = $('#userName input').val();
	var password = $('#password input').val();
	var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
	//Check userName and password
	if(!emailRegex.test(userName) || password.length < 3){
		unverified();
		return;
	}
	
	var request = $.ajax({
        type: 'GET',
        url: 'loginHelper.php',
        data:{action:"login", 
	          userName:userName,
	          password:$.md5(password)
	          },
        success: function(reply){
	        //alert(reply);
	        if(reply == "Y"){
		        location.reload();
		    	}else{
		        unverified();
		        }
        }    
    });
}

$(document).ready(function(){
/**************** Login Process***********************/
$('#signIn').click(function(){
	$('#loginBox').modal('show');
    
});

$('#login').click(function(){
	login();
});

$('#loginBox').keypress(function(event){
	var keycode = (event.keyCode ? event.keyCode : event.which);
	if(keycode == '13')login();
});

})

