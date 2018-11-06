$(document).ready(function(){
            /*
	            Animation -> Search Bar
            */                
            $("#ageYear").click(function(){

	            var html = [
	            	'<div id="searchForm">',
						'<section>',
							'<label for="input_lastName">Last Name</label>',
							'<input id="input_lastName" name="lastName" type="text" placeholder="Optional" maxlength="32"/>',
						'</section>',
					'</div>'
				].join('');
       //      	var div = document.createElement('div');
    			// div.setAttribute('class', 'form-group');
   				// div.innerHTML = html;
   				// document.getElementById('kodok').appendChild(div);
				document.getElementById("kodok").innerHTML = html

				
			});
			
			/*
				Animation -> Mobile Using -> Menu
			*/
			$('#menuBar').click(function(){
				$('#menu ul').slideToggle(300);
			});
			
			/*
				 Mobile Using -> Menu style
			*/
			$(window).resize(function(){
				
			if($(window).width()>850){
				
				$('#menu ul').css('display','block');
				
			}else{
				$('#menu ul').css('display','none');
			}
			});	
								
});