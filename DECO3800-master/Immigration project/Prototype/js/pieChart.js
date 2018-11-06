
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Number of', 'Age Distribution'],
          ['5 years old',     10],
          ['10 years old',     20],
          ['15 years old',     40],
          ['20 years old',     80],
          ['30 years old',     100],
          ['40 years old',     50],
          ['50 years old',     40],
          ['61 years old',     10],
          ['75 years old',  5],
        ]);
        
       var data2 = google.visualization.arrayToDataTable([
          ['Ship Name', 'Ship Destribution'],
          ['Perthshire',     500],
          ['Reichstag',      800],
          ['Roma',  300],
          ['Tewkesbury',  350],
          ['Ophelia',  450],
          ['Oruba',  900],
          ['Queen of the Colonies',  1000],
          ['Duke of the Colonies',  1200],
          ['Kapunda',  200],
          ['Rajah Gopaul',  750],
          ['John Fielden',  550],

        ]);

       var data3 = google.visualization.arrayToDataTable([

            ['Year', 'Number of Immigrant'],
            ['1848',     15402],
            ['1852',     20345],
            ['1856',     13045],
            ['1860',     5000],
            ['1864',     9005],
            ['1868',     23450],
            ['1872',     5023],
            ['1876',     7002],
            ['1880',     9000],
            ['1884',     16000],
            ['1888',     16702],
            ['1892',     19002],
            ['1896',     18023],
            ['1900',     7002],
            ['1904',     14000],
            ['1908',     19032],
            ['1912',     13495],

        ]
        );

   

        var options = {
          title: 'Age Destribution in Years',
          titleTextStyle:{color: '#2ecc71',
                      fontSize: 20,
                      bold: true},
          height: 800,
          width: 800,
          backgroundColor: 'transparent'
          
        };
        var options2 = {
          title: 'Ship Destribution in Years',
          titleTextStyle:{color: '#2ecc71',
                      fontSize: 20,
                      bold: true},
          height: 800,
          width: 800,
          backgroundColor: 'transparent'
        };

        var options3 = {
            title: 'Immigrant Distribution in Years',
            titleTextStyle:{color: '#2ecc71',
                      fontSize: 20,
                      bold: true},
            height: 800,
            width: 800,
            backgroundColor: 'transparent'

        };

        var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
        var chart2 = new google.visualization.ColumnChart(document.getElementById('bar-chart'));
        var chart3 = new google.visualization.LineChart(document.getElementById('line-chart'));


        chart.draw(data, options);
        chart2.draw(data2, options2);
        chart3.draw(data3, options3)
      }


    