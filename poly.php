<?php
//   class shape{
//     function draw(){}
//   }
//   class circle extends shape{
//     function draw(){
//         echo "circle is drawing";
//     }
//   }

//   class Triangle extends shape{
//     function draw(){
//         echo "Triangle is drawing";
//     }
//   }
//   class ellipse extends shape{
//     function draw(){
//         echo "ellipse is drawing";
//     }
//   }

//   $ell = new ellipse();
//   $trr = new Triangle();
//   $cr = new circle();
  
//   $myarr = array($ell,$trr,$cr);
//   foreach($myarr as $value){
//       $value->draw();
//   }



// class Animal {
//     public function makeSound() {
//         echo "Unknown animal sound";
//     }
// }

// class Dog extends Animal {
//     public function makeSound() {
//         echo "Woof";
//     }
// }

// class Cat extends Animal {
//     public function makeSound() {
//         echo "Meow";
//     }
// }
// $animal = new Animal();
// $dog = new Dog();
// $cat = new Cat();

// $animal->makeSound(); // Outputs "Unknown animal sound"
// $dog->makeSound(); // Outputs "Woof"
// $cat->makeSound(); // Outputs "Meow"

  class base {
     public $msg = "base class";
     public function calculate($a,$b){
        return $a+$b ;
     }
  }
  class child extends base{
    public $msg = "chiled class";
    // public function calculate($a,$b){
    //     return $a*$b ;
    //  }
  }

  $ob = new child();
 echo  $ob->calculate(10,5)
?>