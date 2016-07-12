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
         * 
         * @author Juan Diego Araya
         * @param $array array de datos 
         * @param $string array de datos que NO se tienen que cambiar a modo tokenizado, como fechas
         * @return array original con cada uno de los sub arrays transformados a string concatenado. 
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
         * Recorre un array de datos, y lo devuelve con los campos que se necesitan transformar en array.
         * 
         * @author Juan Diego Araya
         * @param  $array El array con los datos de la forma "&dato1&dato2&"
         * @param  $string El array de nombre de llaves que se tienen que ignorar para este proceso, las fechas en este caso. 
         * @return El array con los strings concatenados transformados a array
         */ 
        public function transformarStrings($array, $string){
            foreach($array as $key => $value){
                if(!in_array($key, $string) && $value != null && $value[0] == '&'){
                    $array[$key] = $this->StringTokenedToArray($value);
                } 
            }
            return $array;
        }
        
        /**
         * Concatena un string con " , " para poder mostrarlo en una pantalla. 
         * 
         * @author Juan Diego Araya
         * @param  $string String de la forma &dato1&dato2....&
         * @return El string, sustituyendo los & por "," menos al final
        */ 
        public function transformarStringConcatenadoaLectura ($string){
            $resultado = str_replace("&"," , ", $string);
            $resultado = substr     ($resultado, 3 , -3);
            return $resultado;
        }
        
        /**
         * Transforma todos los strings concatenados de la forma &dato1&dato2....& a oraciones; exceptuando 
         * los que se especifiquen en el parametro $string. 
         * 
         * @author Juan Diego Araya
         * @param  $array El array con los datos de la forma "&dato1&dato2&"
         * @param  $string El array de nombre de llaves que se tienen que ignorar para este proceso, las fechas en este caso. 
         * @return El string, sustituyendo los & por "," menos al final
        */ 
        public function transformarStringsConcatenadosaLectura ($array , $string ){
           foreach($array as $key => $value){
                if(!in_array($key, $string) && $value != null && $value[0] == '&'){
                    $array[$key] = $this->transformarStringConcatenadoaLectura($value);
                } 
            }
            return $array; 
        }
    
}