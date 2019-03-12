<?php 
namespace javajohnHub\Bowshock;

class Apod{

   public function apod($date = '' ){
     if($date == ''){
       $date = date('Y-m-d');
     }
     $base_url = "https://api.nasa.gov/planetary/apod?date=$date&concept_tags=True&api_key=lwrLSSyJVP5topvB9DKdxZJLfIlu9CRBZjoH5N9g";
     return json_decode(file_get_contents($base_url));
   }
 }
}