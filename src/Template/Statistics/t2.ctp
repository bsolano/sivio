
    

    <?php 
      $extranjeras =0;
      $nacionales = 0;
      foreach ($result as $results): 
               
            if (fnmatch("costarricense", $results->nacionalidad)) {
                $nacionales = $nacionales + 1;
             }else {
               $extranjeras = $extranjeras + 1;
             }
                   
    
           endforeach; 
    ?>
      
      


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['costarricenses',<?= $nacionales ?>],
          ['extranjeras',      <?= $extranjeras ?>],
         
        ]);

        var options = {
          title: 'Nacionalidad'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>