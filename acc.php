<?php 
 class person{
    protected $name ,$age ;
   public function disp($n,$a){
        echo $this->name =$n ;
        echo $this->age=$a ;
       $this->msg();
    }

    protected function msg(){
        echo "hello protected function";
    }
 }
 $p1 = new   person();
 
 $p1->disp('fiz',22);

?>