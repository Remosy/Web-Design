var selected_id = [];
/******************
	Infographics Page
*****************/
function getShipName(caller){
	var order = (caller.id).substr(4);
	//alert(order);
	fillInDataPanel("ship",order);
	
}

function getImmigrantName(caller){
	var order = (caller.id).substr(9);
	//alert(order);
	fillInDataPanel("immigrant",order);
}

function getAgeRange(caller){
	var order = (caller.id).substr(8);
	//alert(order);
	fillInDataPanel("ageRange",order);
}

function fillInDataPanel(event, order){
	var table = $('#resultTable').DataTable();
	//Reinitialize dataTable
	$('#resultTable').dataTable().fnDestroy();
	
	var request = $.ajax({
        type: 'GET',
        url: 'support/infographics/infoGraphHelper.php',
        data:{action:"Connect", 
	          event:event,
	          order:order
	          },
        success: function(reply){
	         //alert(reply);
	         if(reply == "report_Connect_Error"){
		       report_Connect_Error("Failed in connect to Database");
		        }else if(reply == "report_Query_Error"){
			   report_Connect_Error("Failed in query data (Ship/Immigrant/AgeRange)");
		        }else{
		       		       
		         table = $('#resultTable').DataTable( {
				 	data: JSON.parse(reply),
				 	columns: [
					 			{ data: 'Id'},
					 			{ data: 'Name'},
					 			{ data: 'Age'},
					 			{ data: 'Ship'},
					 			{ data: 'Date'},
					 			{ data: 'Page'},
					 			{ data: 'QSA_item'},
					 			{ data: 'Microfilm_1'},
					 			{ data: 'Microfilm_2'},
					 			{ data: 'Applicant'},
					 			
					 		  ],
					rowCallback: function( row, data ){
									if ($.inArray(data.DT_RowId, selected_id) > -1 ){
										$(row).addClass('selected');
            							}
        						},
        						
        			columnDefs: [
								 { "visible": false, "targets": 0}
								]
    			 });
    			 
    			  $('#resultTable tbody').on('click', 'tr', function () {
				  		var data = table.row($(this).children()).data();
				  		var id = JSON.parse(data['Id']);
				        var index = $.inArray(id, selected_id);
				        if (index === -1) {
				            //alert(id);
				            selected_id.push(id.toString()); 
				            
				        } else {
				            selected_id.splice( index, 1 );
				        }
				 
				       $(this).toggleClass('selected');
					} );
					//Display Result
					$('#dataPanel').modal('show');
    			 
				
	        }
        }
    
    });
    
    request.fail(function( jqXHR, textStatus ) {
		report_Connect_Error("Failed in getting data. Status:"+textStatus);
	});
}

/******************
	Search Page
*****************/
function userInput(){
	//alert($('form').serialize());
	var InputList = $('#lastName').val()+$('#otherName').val()+
					$('#year').val()+$('#month').val()+$('#day').val()+
					$('#shipName').val()+$('#age').val()+
					$('#applicant').val();

	if(InputList==""){$('input[type="button"]').prop('disabled', true);}
	else{connect_php_connector();}
}

function pass(item){
	item.css('border','2px solid #D6D6D6');
	$('input[type="button"]').prop('disabled', false);
}

function unpass(item){
	item.css('border','5px solid #FFB4B0');
	$('input[type="button"]').prop('disabled', true);
}

function checkInput(caller){
	var that = $(caller);
	//Check day
	if(caller.id.match(/day/g)){
			if(!caller.value.match(/^([1-9]|1[0-9]|2[0-9]|3[01])$/)  && caller.value != ""){
				unpass(that);
				}else{
					
					/*Validate Other Month*/
					if(($('#month').val() == "Apr" ||
						$('#month').val() == "Jun" || 
						$('#month').val() == "Sep" || 
						$('#month').val() == "Nov") && 
						parseInt(caller.value) >30){
						unpass(that);
						}else{pass(that);}
							
					/* Validate Month Feb*/		
					if($('#month').val() == "Feb"){
							var int_year = parseInt($('#year').val());
							var isLeap = (int_year % 4 == 0 &&
								int_year % 100 != 0) ||
								int_year % 400 == 0;

							if(isLeap && 
							  	parseInt(caller.value) <= 29 || 
							  	caller.value == ""){
								pass(that);
								}else if(!isLeap && 
							  			parseInt(caller.value) <= 28 ||
							  			caller.value == ""
							  		){pass(that);}else{unpass(that);}
						}
					}
				
	}
	
	//Check age
	if(caller.id == "age"){
		 if((parseInt(caller.value) > 100 || parseInt(caller.value)<0) || (caller.shiftKey || (caller.keyCode < 48 || caller.keyCode > 57) && (caller.keyCode < 96 || caller.keyCode > 105 ))){
			unpass(that);}else{pass(that);}
	   }  
	
	//Check Special date	
    if(caller.id == "year" && $('#month').val() == "Feb"){ 
		FebChecker('#date');
	}
	
	//Check year
	if(caller.id == "year"){
		if($.trim(caller.value).length == 5){
			caller.value = " " + caller.value+ " -- ";
		}
		if(caller.value.length < 12 && caller.value.length > 4){
			unpass(that);
		}else{pass(that);}
	}
	
	//Check String
	if(caller.id == "otherName" ||
		caller.id == "lastName" ||
		caller.id == "shipName" ||
		caller.id == "applicant"){
		if(caller.value.match(/^[a-zA-Z ]+$/g)){pass(that);}
		else if(caller.value == ""){
			pass(that);
		}else{unpass(that);}
	}
}

function report_Connect_Error(what_error){
	var dialog;
	var content = what_error;
	dialog = $('#dialog-report-error').dialog({
		autoOpen: false,
		resizable: false,
		height:250,
		modal: true,
		buttons: {
		'Report problem': function() {
			location.href = 'mailto:info@archives.qld.gov.au?subject=Report Error&body="'+decodeURIComponent(content)+'"';
			$( this ).dialog( 'close' );
			//location.reload();
			},
			Cancel: function() {
					$( this ).dialog( 'close');
					//location.reload();
					}
			}
	});
	dialog.dialog('open');
}

function getYear(){
	var year= $('#year').val()
	var yearArray = year.split(' ');
	var yearArray = [yearArray[1],yearArray[3]];
	var years = [];
	
	for(i = yearArray[0]; i<=yearArray[1]; i++){
		years.push(i);
	}
	return years;
}

function connect_php_connector(){
	var yearArray;
	var table = $('#resultTable').DataTable();
	//Reinitialize dataTable
	$('#resultTable').dataTable().fnDestroy();
	//Reinitialize selected List
	//selected = [];
	//selected_No = [];
	
	if($('#year').val().length>4){yearArray=getYear();}else{
		yearArray=$('#year').val();
	}
	//alert(yearArray[0]+yearArray[1]);
	if($('#month').val()=="Month")$('#month').val(null);
	//Start Watting Animation
	$('.load_image').css('display','block');
	
	var request = $.ajax({
        type: 'GET',
        url: 'support/search/searchHelper.php',
        data:{action:"Connect", 
	          immigrant_lastName:$('#lastName').val(),
	          immigrant_otherName:$('#otherName').val(),
	          immigrant_year:yearArray,
	          immigrant_month:$('#month').val(),
	          immigrant_day:$('#day').val(),
	          immigrant_shipName:$('#shipName').val(),
	          immigrant_age:$('#age').val(),
	          immigrant_applicant:$('#applicant').val(),
	          qSA_Item_ID:$('#qsa_Item_ID').val()
	          },
        success: function(reply){
	         //alert(reply);
	         if(reply == "report_Connect_Error"){
		       report_Connect_Error("Failed in connect to Database");
		        }else{
		        
		        //alert(reply);
		         $('.load_image').css('display','none');
		         table = $('#resultTable').DataTable( {
				 	data: JSON.parse(reply),
				 	columns: [
					 			{ data: 'Id'},
					 			{ data: 'Name'},
					 			{ data: 'Age'},
					 			{ data: 'Ship'},
					 			{ data: 'Date'},
					 			{ data: 'Page'},
					 			{ data: 'QSA_item'},
					 			{ data: 'Microfilm_1'},
					 			{ data: 'Microfilm_2'},
					 			{ data: 'Applicant'},
					 			
					 		  ],
					rowCallback: function( row, data ){
									if ($.inArray(data.DT_RowId, selected_id) > -1 ){
										$(row).addClass('selected');
            							}
        						},
        						
        			columnDefs: [
								 { "visible": false, "targets": 0}
								]
    			 });
    			  $('#resultTable tbody').on('click', 'tr', function () {
				  		var data = table.row($(this).children()).data();
				  		var id = JSON.parse(data['Id']);
				        var index = $.inArray(id, selected_id);
				        if (index === -1) {
				            //alert(id);
				            selected_id.push(id.toString()); 
				            
				        } else {
				            selected_id.splice( index, 1 );
				        }
				 
				       $(this).toggleClass('selected');
					} );
    			 $(".form-horizontal").slideUp();
				 $("#searchResult").css('display','block');
				 
				
	        }
        }
    
    });
    
    request.fail(function( jqXHR, textStatus ) {
		report_Connect_Error("Failed in getting data. Status:"+textStatus);
	});
} 

function sendEmail(){
	var content = "";
	$.each( selected_id, function( index, value ){
    content += " ID: "+value+" and";
	});
	content = content.substr( 0, content.length - 4)+"."+" Thank you!";
	location.href = 'mailto:info@archives.qld.gov.au?subject=Request Records&body="'+decodeURIComponent("Hello, I hope get these records: "+content)+'"';
}

function request_Records_Email(caller){
	
	if(selected_id.length > 0){
		sendEmail();
	}else{
		report_Connect_Error("Please select a row!");
		}
	
}

function request_Records_Post(caller){
		window.open("http://www.archives.qld.gov.au/Researchers/CollectionsDownloads/Documents/IndexOrderForm.pdf");
	
}


