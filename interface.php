<?php  
 interface super {
    public function MainNotice();
 }
 class teacher implements super{
    public function MainNotice(){
        echo "teacher send notice";
    }
 }
 class Student implements super{
    public function MainNotice(){
        echo "student send notice";
    }
 }
 class Sub implements super{
    public function MainNotice(){
        echo "Sub send notice";
    }
 }

 $t = new teacher();
 $st = new Student();
 $su  = new Sub();

 $myData = array($t,$st,$su);
 foreach($myData as $value){
    echo $value->MainNotice();
 }
 
?>