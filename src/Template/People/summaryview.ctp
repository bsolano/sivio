
<br>

 <!--Sale cortado-->
<nav class="large-3 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
    Nav bar
    </ul>
</nav>


     <!--This will be the container years-->
      <div class = "container">
          <?php foreach ($years as $year): ?>
          <div class = "row">
                   <div class = "large-3 medium columns" > 
                         <legend><h2></h2><?php echo $year->fecha_inicio->format('Y'); ?></h2> </legend> 
                         
                         <br>
                    </div>   
                    <?php foreach ($atentions as $atention): ?>
                        <div class = "row">
                             <div class = "small-9 large-push-1 columns box"> 
                                    <!--Each atenttion will be a row-->
                                <tr><td><?php 
                                if ($atention->fecha_inicio->format('Y') == $year->fecha_inicio->format('Y'))
                                    echo $atention; ?></td><td>
                             </div>
                         </div>
                    <?php endforeach; ?>
 
                    </div>
            <?php endforeach; ?>
            </div>   
      </div>
       



