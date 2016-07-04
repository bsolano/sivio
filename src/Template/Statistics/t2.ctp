
    

    <?php 
      $extranjeras =0;
      $nacionales = 0;
      foreach ($result as $results): 
               
            if (fnmatch("*costarricense*", $results->nacionalidad)) {
               
                $nacionales = $nacionales + 1;
             }else {
               $extranjeras = $extranjeras + 1;
                echo $results->nacionalidad;
             }
                   
    
           endforeach; 
           
           
           
      $casada =0;
      $soltera = 0;
      $viuda = 0;
      $divorciada = 0;
      foreach ($result as $results): 
               
            if (fnmatch("*Soltera*", $results->estado_civil)) {
               
                $divorciada = $divorciada + 1;
             }else {
               $soltera = $soltera + 1;
                
             }
                   
     endforeach; 
     
    ?>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
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

        var chart = new google.visualization.PieChart(document.getElementById('piechar'));

        chart.draw(data, options);
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['casada',9],
          ['divorciada',<?= $divorciada ?>],
          ['separada',      8],
          ['soltera',      <?= $soltera ?>],
         
        ]);

        var options = {
          title: 'Estado Civil'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
      
      
    

    </script>
  </head>
  <body>
      
    <div id="piechar" style="width: 300px; height: 200px;"></div>
    
    <div id="piechart" style="width: 300px; height: 200px;"></div>
  