$(document).ready(function() {
				$(document).tooltip();

				$("#sliderBar").slider({
					orientation: "horizantal",
					range: "min",
					min: 1848,
					max: 1917,
					value: 1,
					slide: function (event, ui){
						$("#year").val(ui.value);
						$(ui.value).val(parseInt($('#year').val()));
						$('#shipTable tr td').removeAttr('id');
						$("#shipTable").find("tr:not(:first)").remove();
						var range = ui.value;
						if ($('#shipTable tr').length == 1) {
							connect(range);
						}
					}
				});

				connect('1848');
				$("#year").val('1848');

				$("#year").keyup(function() {
					if ($("#year").val().length == 4){
						$("#sliderBar").slider("value", $(this).val());
						$('#shipTable tr td').removeAttr('id');
						$("#shipTable").find("tr:not(:first)").remove();
						var range = $(this).val();
						if ($('#shipTable tr').length == 1) {
							connect(range);
						}
					}
				});

				function connect(range) {
					var xmlhttp = new XMLHttpRequest();
					var url = "http://deco3800-immi.uqcloud.net/getShip.php";

					xmlhttp.open("GET", url + '?range=' + range, true);

					xmlhttp.onreadystatechange = function() {
						if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
							drawShip(xmlhttp.responseText);
						}
					}
					xmlhttp.send();

					function drawShip(response) {
						var arr = JSON.parse(response);
						var highest = 0;

						for (i1 = 0; i1 < arr.length; i1++) {
							if (arr[i1].Ships.length > highest) {
								highest = arr[i1].Ships.length;
							}
						}

						for (i2 = 0; i2 < highest; i2++) {
							var code = "<tr>";
							for (i1 = 0; i1 < 12; i1++) {
								if (arr[i1].Ships.length == 0) {
									code += "<td></td>";
									} else {
									if (i2 >= arr[i1].Ships.length) {
										code += "<td></td>";
										} else {
										var shipArr = arr[i1].Ships[i2];
										var ship = shipArr.Ship;
										code += "<td id='shipCell' title='" + ship + "'></td>";
									}
								}
							}
							$('#shipTable tbody').append(code + "</tr>");
						}
					}
				}
})
