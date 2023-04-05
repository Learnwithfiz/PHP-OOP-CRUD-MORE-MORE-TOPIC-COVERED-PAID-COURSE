<?php 
  class person{
    private  $name,$age;
    protected $add ="Dhaka";

  public function Display($n,$a){
        echo $this->name = $n ;
        echo $this->age = $a;
        $this->usenaame();
       
    }
    private function usenaame(){
        echo "private method";
        $this->prot();
    }
    protected function prot(){
        echo "protected method";
    }
  }
 $p1= new person();
  $p1->add;
 $p1->Display('fiz',22);


?>