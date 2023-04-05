<?php 
//multi-level inheritance 
//  class cat{
//     function mew(){
//         echo "mew mew i am cat and parents class ";
//     }
//  }
  
//  class mew extends cat{
   
//  }
//  class dog extends mew {
   
//  }
//  $animales  =  new dog();
//  echo $animales->mew();


class animales{
    public $name ;
    public $color ;

    public function __construct($n,$c){
       $this->name = $n;
       $this->color =$c;
    }
    public function eat(){
        echo "{$this->name} is eating";
    }
}

class cat extends animales{
    public function mew(){
        echo "{$this->name} is mew mew class";
    }
}
class housecat extends cat{
    // animals er moddhe ja ache ta chole aslo
    // cat er moddhe ja ache ta ei classe chole aslo 

    public function sleep(){
        echo  "{$this->name} sleeping";
    }
}


      $houseCat =  new housecat('Tom','gray');
      $houseCat->eat();
      $houseCat->mew();
      $houseCat->sleep();
?>