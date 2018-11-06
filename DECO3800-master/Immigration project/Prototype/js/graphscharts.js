$(document).ready(function() {
	var year = ["1848 to 1857","1858 to 1867","1868 to 1877","1878 to 1887","1888 to 1897","1898 to 1907","1908 to 1917"];
	var shipNum = ["23", "64", "161", "264", "128", "103", "77"];
	var immiNum = ["7575","26333","46945","112622","2881","11859","28096"];
	
	$("#generateChart").on('click', function() {
		var xa = $("#x_axis option:selected").text();
		var ya = $("#y_axis option:selected").text();
		if ((xa != "X-Axis") && (ya != "Y-Axis")) {
			$(".chartdiv").removeAttr('id');
			$(".chartNote").removeAttr('id');
			var x = "";
			var y = "";
			var xt = "";
			var yt = "";
			var xw = "";
			var yw = "";
			switch(xa) {case "Year Range": xw = "year"; x = year; xt = "s"; break; default: break;}
			switch(ya) {case "Number of Immigrants": yw = "immigrants"; y = immiNum; yt = "i"; break; case "Number of Ships": yw = "ships"; y = shipNum; yt = "i"; break; default: break;}
			makechart(xa, ya, x, y, xt, yt, xw, yw);
		}
	})
	
	function makechart (x_axis, y_axis, x, y, x_type, y_type, xw, yw) {
		var title = y_axis + " vs " + x_axis;
		var linechart = "AmCharts.makeChart(\"linechart\",\n" +"{\n" +"\"type\": \"serial\",\n" +"\"startDuration\": 1,\n" +"\"handDrawn\": true,\n" +"\"handDrawScatter\": 1,\n" +"\"categoryField\": \"category\",\n" +"\"autoResize\": false,\n" +"\"categoryAxis\": {\n" +"\"gridPosition\": \"start\",\n" +"\"title\": x_axis\n" +"},\n" +"\"trendLines\": [],\n" +"\"graphs\": [\n" +"{\n" +"\"balloonText\": \"[[value]] " + yw + " in " + xw + " [[category]]\",\n" +"\"bullet\": \"round\",\n" +"\"id\": \"AmGraph-1\",\n" +"\"title\": title,\n" +"\"valueField\": \"column-1\"\n" +"},\n" +"],\n" +"\"guides\": [],\n" +"\"valueAxes\": [\n" +"{\n" +"\"id\": \"ValueAxis-1\",\n" +"\"title\": y_axis\n" +"}\n" +"],\n" +"\"allLabels\": [],\n" +"\"balloon\": {},\n" + "\"titles\": [\n" + "{\n" + "\"id\": \"Title-1\",\n" + "\"size\": 15,\n" + "\"text\": title\n" + "}\n" + "],\n" + "\"dataProvider\": [\n" + "{\n"; 
		linechart += addData(x_type, y_type, x, y, "");
		linechart += "\n" +"]\n" +"}\n" +");\n";
		
		var piechart = "AmCharts.makeChart(\"piechart\",\n" +"{\n" +"\"type\": \"pie\",\n" +"\"balloonText\": \" [[title]]<br><span style='font-size:12px'><b>[[value]] " + yw + "</b> ([[percents]]%)</span>\",\n" + "\"depth3D\":5,\n" +"\"handDrawn\": true,\n" +"\"handDrawScatter\": 1,\n" +"\"pullOutRadius\": \"10%\",\n" +"\"labelRadius\": 10,\n" +"\"minRadius\": 125,\n" +"\"outlineAlpha\": 0.5,\n" +"\"outlineThickness\": 2,\n" + "\"pullOutEffect\": \"elastic\",\n" +"\"pullOutOnlyOne\": true,\n"+"\"startDuration\": 0,\n" +"\"titleField\": \"category\",\n" +"\"valueField\": \"column-1\",\n" +"\"autoResize\": false,\n" +"\"allLabels\": [],\n" +"\"balloon\": {},\n" +"\"legend\": {\n" +"\"enabled\": true,\n" +"\"align\": \"center\",\n" +"\"markerType\": \"circle\"\n" +"},\n" + "\"tittles\":[],\n"+"\"dataProvider\": [\n" +"{\n";
		piechart += addData(x_type, y_type, x, y, xw+" "); 
		piechart += "\n" +"]\n" +"}\n" +");\n";
		
		eval(linechart);
		eval(piechart);
	}
	
	function addData (x_type, y_type, x, y, xw) {
		var code = "";
		for (var i = 0; i < x.length; i++) {
			code += "\"category\":";
			if (x_type == "s") {
				code += " \"" +  xw + x[i] + "\",\n"; 
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
return code;
}
})