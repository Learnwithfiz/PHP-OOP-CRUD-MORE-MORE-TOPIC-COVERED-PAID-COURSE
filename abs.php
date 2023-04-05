<?php  
//   abstract class teacher{
//       abstract function msg();
//   }
//   class student extends teacher{
//     function msg(){
//         echo "Hello i am student";
//     }
//   }

//   $t = new student();
//   $t->msg();

 abstract class teacher{
    abstract function msg($n1,$n2);
 }
 class student extends teacher{
   function msg($n1,$n2){
      echo "hello teacher msg <br>";
      echo $n1+$n2;
   }
 }
 $t = new student();
 $t->msg(10,20);
?>