<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

/**
 * Include $this->loadComponent('StringManipulation');
 * on the controler that you want to add use this functions
 * */
class StringManipulationComponent extends Component
{
         /**
          * Transform an array (as multiple selected checkboxes) to string 
          * with the token "&", use this before save the value on the DB
          */
         
         public function ArrayToTokenedString($array){
                  $result = "";
                  foreach($array as $item){
                      $result = $result."&".$item;
                  }
                  $result = $result."&";
                  
                  return $result;
                 
                  
              }
        /**
         * Get an sigle string tokened with "&" and split it
         * Return array 
        */
         public function StringTokenedToArray($string){
                return  $array = explode("&",$string,-1);
         }
         /**
          * Get a set of arrays with strings tokened and transforms each 
          * tokened string to array
          * $string is the string that wants to convert on each internal array
          * $arrays is the all set of arrays 
          */
          public function MultipleStirngsTokenedToArray($arrays,$string){
                
                foreach($arrays as $array){
                  $array = explode("&",$array->get($string),-1);
                  $arrays->$array = $array;
                }
                return $arrays;
         }
         
        /**
         * recorre un array de datos, y lo devuelve con los campos que se necesitan transformar en string concatenada
         * $array array de datos 
         * $string array de datos que NO se tienen que cambiar a modo tokenizado, como fechas
         */ 
        public function transformarArrays(& $array, $string){
            foreach($array as $key => $value){
                if(is_array($value) && !in_array($key,$string)){
                    $array[$key] = $this->ArrayToTokenedString($value);
                } 
            }
            return $array;
        }
        
        /**
         * recorre un array de datos, y lo devuelve con los campos que se necesitan transformar en array
         * $array array de datos 
         * $string array de datos que NO se tienen que cambiar a modo array, como fechas
         */ 
        public function transformarStrings($array, $string){
            foreach($array as $key => $value){
                if(!in_array($key, $string) && $value != null && $value[0] == '&'){
                    $array[$key] = $this->StringTokenedToArray($value);
                } 
            }
            return $array;
        }
    
}