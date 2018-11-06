

function liveSearchA(event){
	var toSearch = event.value;
	var results = "";
	if((toSearch.length <2 && toSearch == " ")||toSearch.length < 1){
		event.value = ('');
		$('#resultLists').html("");
	}else{
		var regex = new RegExp(toSearch, "i");
		$.getJSON('restaurant_JsonData.json', function(data){
			$.each(data, function(key, val){
				var restaurantName = JSON.stringify(val.name);
				var restaurantTel = JSON.stringify(val.tel);
				if(restaurantName.indexOf(toSearch)>=0 || restaurantTel.indexOf(toSearch)>=0){
					results += addRestaurant(restaurantName, restaurantTel);
				}
			});
				$('#resultLists').html(results);
		});
	}
	
		
}


function addRestaurant(restaurantName, restaurantTel){
	var results = ('<a class="list-group-item"><h4 class="list-group-item-heading">'+
							restaurantName+'</h4><p class="list-group-item-text">'+
							restaurantTel+'</p></a>');
	return results;
}
     

