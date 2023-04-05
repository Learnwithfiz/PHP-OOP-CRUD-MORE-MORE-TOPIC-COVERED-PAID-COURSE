<?php  
 interface canSwim {
    public function swim();
 }
 interface CanFly{
    public function fly();
 }
 class Duck implements canSwim,CanFly{
    public function swim(){
        echo "the durk is swimming";
    }
    public function fly(){
         echo "The duckk is flying";
    }
 }

 $Duck1 = new Duck();
 $Duck1->swim();
 $Duck1->fly();
?>