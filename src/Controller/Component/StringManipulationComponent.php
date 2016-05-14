<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class StringManipulationComponent extends Component
{

         public function ArrayToTokenedString($array){
                  $result = "&";
                  foreach($item as $array){
                      $result = $result + "&" + $item;
                  }
                  $result = $result + "&";
                  
                  return $result;
              }
     
    
}