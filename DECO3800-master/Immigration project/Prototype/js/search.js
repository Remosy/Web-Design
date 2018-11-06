$(document).ready(function(){
		
		$(".searchAgain").click(function(){
			location.reload();
		    //$(".form-horizontal").slideDown();
		    //$("#searchResult").slideUp();
		});
		
			
			/*
	            Animation -> Year Slider 
            */
			$(function() {
				$('#yearRange').nstSlider({
				    "left_grip_selector": ".leftGrip",
				    "right_grip_selector": ".rightGrip",
				    "value_bar_selector": ".bar",
				    "value_changed_callback": function(cause, leftValue, rightValue, prevLeft, prevRight) {
				        var $grip = $(this).find('.leftGrip'),
				            whichGrip = 'left grip';
				        if (leftValue === prevLeft) {
				            $grip = $(this).find('.rightGrip');
				            whichGrip = 'right grip';
				        }
				        var text = [];
				        text.push('<b>Moving ' + whichGrip + '</b>');
				        text.push('role: ' + $grip.attr('role'));
				        text.push('aria-valuemin: ' + $grip.attr('aria-valuemin'));
				        text.push('aria-valuenow: ' + $grip.attr('aria-valuenow'));
				        text.push('aria-valuemax: ' + $grip.attr('aria-valuemax'));
				        text.push('aria-disabled: ' + $grip.attr('aria-disabled'));
				        $('.ariaAttributesAsText').html(text.join('<br />'));
				        $( "#year" ).val(" "+leftValue+ " -- " + rightValue);
				        /*
				        $(this).parent().find('.leftLabel').text(leftValue);
				        $(this).parent().find('.rightLabel').text(rightValue);*/
				    }
				});
				
			});
			
						
});