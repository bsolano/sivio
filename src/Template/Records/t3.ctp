<fieldset>
        <h3><?= __('Historial de Atenciones') ?></h3>
         <div class="externalReferences index large-6 medium-6 columns content">
           <?php
             $a= $atenciones->toArray(); 
          //  print_r(array($c));
          //  echo '<pre>'; print_r($a); echo '</pre>';
            $n = 0;
            foreach($a as $atenciones){
                if($atenciones->person_id = $p_id){
                    echo "<legend> Atencion </legend><br>";
                    echo $this->Form->input('Id persona',['value'=>$a[$n]['person_id']]); 
                    echo $this->Form->input('Numerp de familia',['value'=>$a[$n]['num_familia']]); 
                    echo $this->Form->input('fecha de ingreso',['value'=>$a[$n]['fecha']]); 
                    echo $this->Form->input('Motivo de ingreso',['value'=>$a[$n]['institucion_que_refiere']]); 
                }
                $n++;
            }
            ?>  
    </div>
      <h3><?= __('') ?></h3>
</fieldset>