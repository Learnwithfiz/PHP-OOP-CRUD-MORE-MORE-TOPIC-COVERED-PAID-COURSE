<?php 
   class A {
    public function ASend(){
        echo "I am parents Class A";
    }
   }
   class B extends A{
    public function BSend(){
        echo "I am child Class B";
    }
   }
   class C extends A{
    public function CSend(){
        echo "I am child Class C";
    }
   }

   $obj_c = new C();
   $obj_c->ASend();
   $obj_c->CSend();
 
?>