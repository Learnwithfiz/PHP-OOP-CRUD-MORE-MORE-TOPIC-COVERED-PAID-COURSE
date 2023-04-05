<?php 
    // class Student{
    //   public   $name , $age , $dept , $roll ; 
       
    //   function SetStudentInfo($stName,$stAge,$stDept,$StRoll){
    //     $this->name =$stName;
    //     $this->age=$stAge;
    //     $this->dept =$stDept;
    //     $this->roll=$StRoll;
    //   }

    //   function DisplayStudentInfo(){
    //      echo "student name = ".  $this->name ."<br>" ;
    //      echo "student age = ". $this->age  ."<br>";
    //      echo "student dept = ". $this->dept ."<br>";
    //      echo "student roll = ".$this->roll ."<br>";
    //   }
      
    // }
    // //create object for s1 
    // $s1  =  new Student();
    // $s1->SetStudentInfo("Fiz",23,"CSE",73);
    // $s1->DisplayStudentInfo();

    // $s2  =  new Student();
    // $s2->SetStudentInfo("Rony",33,"Eng",78);
    // $s2->DisplayStudentInfo();
   
    // $s3  =  new Student();
    // $s3->SetStudentInfo("Mukul",22,"BBA",90);
    // $s3->DisplayStudentInfo();


   
    // default constructor  

    // class person{
    //    function __construct() {
    //        echo "default __constructor";
    //    }  
    // }
    // new person();
    
    class teacher {
        public $name , $dept , $course_code ;
        
        function __construct($tname ,$tdept,$c_code){
              $this->name = $tname;
              $this->dept = $tdept;
              $this->course_code = $c_code;
        }
        function Display(){
            echo "Teacher name = ". $this->name ."<br>" ;
            echo "Teacher dept = ". $this->dept ."<br>";
            echo "Teacher course_code = ".$this->course_code ."<br>";
            
        }

        function __destruct(){
            echo "destructor is calling ";
        }

        function Msg(){
            echo "hello  i am programming <br>";
        }
    }
    
   $t1 =  new teacher("Fiz","CSE","CSE-111");
    $t1->Display();
    $t2=  new teacher("Fiz2","CSE2","CSE-1112");
    $t2->Display();
    $t1->Msg();

?> 
