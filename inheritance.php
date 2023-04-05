<?php
  // single inheritance
  class Father{
     public $jomi, $taka;
      function FatherSaysText(){
          echo "Ami tomder sommpotti dan kore dilam ";
     }
  }
  class Chiled extends Father{

      function __construct($j,$t){
        echo "Jomi = ". $this->jomi =  $j ;
        echo "taka = ".  $this->taka = $t ;   
      }
      function Display(){
        echo "Jomi = ".$this->jomi . "<br>";
        echo "taka = ".$this->taka . "<br>";
      }
  }

   $soon1 =  new Chiled("20 bigha 10 katha",200000);
   $soon1->Display();
   $soon2 =  new Chiled("10 bigha 10 katha",2000000);
   $soon2->Display();
  
  


?>