$(document).ready(function() {
				var year = ["1848 to 1857","1858 to 1867","1868 to 1877","1878 to 1887","1888 to 1897","1898 to 1907","1908 to 1917", "undefined"];
				var shipNum = ["23", "64", "161", "264", "128", "103", "77", "3"];
				var immiNum = ["7575","26333","46945","112622","2881","11859","28096","888"];
				$("#generateChart").on('focus', function() {
					var xa = $("#x_axis option:selected").text();
					var ya = $("#y_axis option:selected").text();
					if ((xa != "X-Axis") && (ya != "Y-Axis"))
						var x = "";
						var y = "";
						var xt = "";
						var yt = "";
						if (xa == "Year Range") {x = year; xt = "s";}
						if (ya == "Number of Immigrants") {y = immiNum; yt = "i";} if (ya == "Number of Ships") {y = shipNum; yt = "i";}
						makechart(xa, ya, x, y, xt, yt);
				})
				
				function makechart (x_axis, y_axis, x, y, x_type, y_type) {
					var title = y_axis + " vs " + x_axis;
					var code = "AmCharts.makeChart(\"chartdiv\",\n" +"					{\n" +"						\"type\": \"serial\",\n" +"						\"categoryField\": \"category\",\n" +"						\"startDuration\": 1,\n" +"						\"categoryAxis\": {\n" +"							\"gridPosition\": \"start\",\n" +"							\"title\": x_axis\n" +"						},\n" +"						\"trendLines\": [],\n" +"						\"graphs\": [\n" +"						{\n" +"							\"balloonText\": \"[[category]]:  [[value]]\",\n" +"							\"bullet\": \"round\",\n" +"							\"id\": \"AmGraph-1\",\n" +"							\"title\": title,\n" +"							\"valueField\": \"column-1\"\n" +"						},\n" +"						],\n" +"						\"guides\": [],\n" +"						\"valueAxes\": [\n" +"						{\n" +"							\"id\": \"ValueAxis-1\",\n" +"							\"title\": y_axis\n" +"						}\n" +"						],\n" +"						\"allLabels\": [],\n" +"						\"balloon\": {},\n" +"						\"legend\": {\n" +"							\"enabled\": true,\n" +"							\"useGraphSettings\": true\n" +"						},\n" +"						\"titles\": [\n" +"						{\n" +"							\"id\": \"Title-1\",\n" +"							\"size\": 15,\n" +"							\"text\": title\n" +"						}\n" +"						],\n" +"						\"dataProvider\": [\n" +"						{\n" 
					for (var i = 0; i < x.length; i++) {
						code += "\"category\":";
						if (x_type == "s") {
							code += " \"" + x[i] + "\",\n"; 
							}
						if (x_type == "i") {
							code += x[i] + ",\n";
							}
						if (y_type == "s") {
							code += "\"column-1\": \"" + y[i] + "\"\n " + "}";
							}
						if (y_type == "i") {
							code += "\"column-1\": " + y[i] + "\n " + "}";
							}
						if (i < x.length - 1) {
							code += ",\n{\n"
						}
					}
					code += "\n" +"						]\n" +"					}\n" +"					);\n"
					eval(code)
				}
			})

