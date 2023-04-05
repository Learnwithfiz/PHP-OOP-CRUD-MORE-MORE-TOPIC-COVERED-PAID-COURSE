<?php 

   class example {
     const text = 20 ;
     function hello(){
        return self::text ;
     }
   }
  $ob =  new  example(); 
  echo $ob->hello();
?>