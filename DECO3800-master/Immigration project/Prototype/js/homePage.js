
$(document).ready(function() {
	$(".infoSection").on({
		"mouseover": function() {
			$('.infoSection').removeAttr('id');
		},
		"mouseleave": function () {
			$(this).attr('id', 'defSection');
		}
	})
})
