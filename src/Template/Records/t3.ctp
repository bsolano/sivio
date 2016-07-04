<fieldset>
        <h3><?= __('Historial de Atenciones') ?></h3>
         <div class="externalReferences index large-6 medium-6 columns content">
           <?php
                $p= $logs->toArray();
                
             $at= $a->toArray();
       //   echo '<pre>'; print_r($at); echo '</pre>';  
          $n = 0;
            foreach($p as $a){
                if($pi == $p[$n]['Logs']['person_id'] ){
                echo "<legend> Atencion </legend><br>";
                echo $this->Form->input('id',array('value'=>$p[$n]['Logs']['person_id'], 'readonly' => 'readonly' )); 
                echo $this->Form->input('Numerp de familia',array('value'=>$p[$n]['Logs']['num_familia'], 'readonly' => 'readonly' )); 
                echo $this->Form->input('fecha de ingreso',array('value'=>$p[$n]['Logs']['fecha'],'readonly' => 'readonly')); 
                echo $this->Form->input('Motivo de ingreso',array('value'=>$p[$n]['Logs']['institucion_que_refiere'],'readonly' => 'readonly')); 
                }
                $n++;
            }
          //  echo $this->Form->input('desde', ['type' => 'date','empty' => true, 'minYear' => 2010,'label' =>'Desde']);
           /*
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
            }*/
            ?>  
    </div>
      <h3><?= __('') ?></h3>
</fieldset>