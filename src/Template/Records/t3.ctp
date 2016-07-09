<fieldset>
        <h3><?= __('Historial de Atenciones') ?></h3>
         <div class="externalReferences index large-6 medium-6 columns content">
           <?php
                $p= $logs->toArray();

          $n = 0;
            foreach($p as $a){
                if($pi == $p[$n]['Logs']['person_id'] ){
                echo "<legend> Atencion </legend><br>";
                echo $this->Form->input('id',array('value'=>$p[$n]['Logs']['person_id'], 'readonly' => 'readonly' )); 
                echo $this->Form->input('Numero de familia',array('value'=>$p[$n]['Logs']['num_familia'], 'readonly' => 'readonly' )); 
                echo $this->Form->input('fecha de ingreso',array('value'=>$p[$n]['Logs']['fecha'],'readonly' => 'readonly')); 
                echo $this->Form->input('Motivo de ingreso',array('value'=>$p[$n]['Logs']['institucion_que_refiere'],'readonly' => 'readonly')); 
                }
                $n++;
            }
            ?>  
    </div>
      <h3><?= __('') ?></h3>
     
</fieldset>