<?php
namespace Thealgoslingers;
/*
 -----------------------------------
  AlgoslingFileanew
  @Thealgoslingers
  Dec 6, 2023
  MIT
 -----------------------------------
*/
class AlgoslingFileanew
{
 public function renameFile($file,$match){
  $Algo =  [
   'Alpha',
   'Num',
   'Alnum',
   'Unique',
   'Hash'
   ];
  $Alpha = [
   "A",
   "B",
   "C",
   "D",
   "E",
   "F",
   "G",
   "H",
   "I",
   "J",
   "K",
   "L",
   "M",
   "N",
   "O",
   "P",
   "Q",
   "R",
   "S",
   "T",
   "U",
   "V",
   "W",
   "X",
   "Y",
   "Z"
   ];
   ## temporary name
   $name = "";
   
   if(!file_exists($file)){
    throw new Error("File cannot be found");
   }
   
   if(!in_array($match,$Algo)){
    throw new Error("Type of Algorithm doesn't exist!");
   }
   
    for($i=0;$i<27;$i++){
      $num = rand(
            0,
           25
       );
     if($match == "Alpha"){
       $name .= $Alpha[$num];
     }
     elseif($match == "Num"){
      $name .= $num;
     }
     elseif($match == "Alnum"){
      $name .= $num.$Alpha[$num];
     }
     elseif($match == "Unique"){
      $name = (
        uniqid()
     );
     }
     elseif("Hash"){
      $slr = array(
       "cost" =>
       4
       );
      $name = password_hash($num.$Alpha[$num],PASSWORD_BCRYPT,$slr);
     }
    }
   return $name.".".explode(".",$file)[1];
 }
}