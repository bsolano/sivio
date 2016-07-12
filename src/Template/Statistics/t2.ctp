
    

    <?php 
      $extranjeras =0;
      $nacionales = 0;
      foreach ($result as $results): 
               
            if (fnmatch("*ostarricense*", $results->nacionalidad)) {
               
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
               
            if (fnmatch("*oltera*", $results->estado_civil)) {
               
                $soltera = $soltera + 1;
             }elseif(fnmatch("*ivorciada*", $results->estado_civil)) {
               $divorciada = $divorciada + 1;
                
             }elseif(fnmatch("*asada*", $results->estado_civil)) {
               $casada = $casada + 1;
                
             }else
                $viuda = $viuda + 1;
         endforeach;
         
      $ilegal =0;
      $residente = 0;
      $refugiada = 0;
      $nacional = 0;
      foreach ($result as $results): 
               
            if (fnmatch("*legal*", $results->condicion_migratoria)) {
               
                $ilegal = $ilegal + 1;
             }elseif(fnmatch("*esidente*", $results->condicion_migratoria)) {
               $residente = $residente + 1;
                
             }elseif(fnmatch("*efugiada*", $results->condicion_migratoria)) {
               $refugiada = $refugiada + 1;
                
             }else
                $nacional = $nacional + 1;
         endforeach;
         
      $PI = 0;
      $PC = 0;
      $SI = 0;
      $SC = 0;
      $UI = 0;
      $UC = 0;
      $NG = 0;
      $tec= 0;
      foreach ($result as $results): 
               
            if (fnmatch("*primaria completa*", $results->escolaridad)) {
               
                $PC = $PC + 1;
             }elseif(fnmatch("*primaria incompleta*", $results->escolaridad)) {
               $PI = $PI+ 1;
                
             }elseif(fnmatch("*secundaria completa*", $results->escolaridad)) {
               $SC = $SC + 1;
                
             }elseif(fnmatch("*secundaria incompleta*", $results->escolaridad)) {
               $SI = $SI + 1;
                
             }elseif(fnmatch("*universitaria completa*", $results->escolaridad)) {
               $UC = $UC + 1;
                
             }elseif(fnmatch("*universitaria incompleta*", $results->escolaridad)) {
               $UI = $UI + 1;
                
             }elseif(fnmatch("*ing*", $results->escolaridad)) {
               $NG = $NG + 1;
                
             }elseif(fnmatch(null, $results->escolaridad)) {
               $NG = $NG + 1;
                
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
          ['casada',<?= $casada ?>],
          ['divorciada',<?= $divorciada ?>],
          ['Viuda',      <?= $viuda ?>],
          ['soltera',      <?= $soltera ?>],
         
        ]);

        var options = {
          title: 'Estado Civil'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Primaria incompleta',<?= $PI ?>],
          ['Primaria Completa',<?= $PC ?>],
          ['Secundaria Incompleta',      <?= $SI ?>],
          ['Secundaria Completa',      <?= $SC?>],
          ['Ningún Grado',      <?= $NG?>],
         
        ]);

        var options = {
          title: 'Escolaridad'
        };

        var chart = new google.visualization.PieChart(document.getElementById('escolaridad'));

        chart.draw(data, options);
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Ilegal',<?= $ilegal ?>],
          ['Refugida',      <?= $refugiada ?>],
          ['Nacional',<?= $nacional ?>],
          ['Residente',      <?= $residente ?>],
         
        ]);

        var options = {
          title: 'Nacionalidad'
        };

        var chart = new google.visualization.PieChart(document.getElementById('condicion_migratoria'));

        chart.draw(data, options);
      }
      
      
      
    

    </script>
  </head>
  <body>
      
    <div id="piechar" style="width: 300px; height: 200px;"></div>
    
    <div id="piechart" style="width: 300px; height: 200px;"></div>
  
  <div id="escolaridad" style="width: 300px; height: 200px;"></div>
  
  <div id="condicion_migratoria" style="width: 300px; height: 200px;"></div>