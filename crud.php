<?php 
  class Crud{
    public $localhost , $user_name, $pass ,$db_name , $con;
    function __construct($lc,$r,$p,$db){
       $server =  $this->localhost = $lc;
       $user =  $this->user_name = $r ;
       $dbpass =  $this->pass = $p ;
       $dbCon =   $this->db_name = $db;
       $this->con = mysqli_connect($server,$user,$dbpass,$dbCon);
       if($this->con){
         echo "database connect success";
       }else{
        echo "database connect failed";
       }
    }

    public function OnInsert($name,$email,$pass){
       $insert = "INSERT INTO student(name,email,pass)
       VALUES('$name','$email','$pass')";  
      $query =  mysqli_query($this->con,$insert);
      if($query){
        echo "<br>Data insert success<br>";
      }else{
        echo "<br>Data insert failed<br>";

      }
    }

    public function OnSelectData(){
        $sel = "SELECT * FROM student";
        $ex  = mysqli_query($this->con,$sel);

        while($row= mysqli_fetch_array($ex)){
           echo "Name = ".$row['name'] ."<br>"; 
           echo "email = ".$row['email'] ."<br>"; 
           echo "pass = ".$row['pass'] ."<br>";    
        }
    }

    public function OnUpdate(){
        $update = "UPDATE student SET name='rony',email='rony@gmail.com',
        pass='123' WHERE id=10";
        $e = mysqli_query($this->con,$update);
    }

    public function OnDelete($id){
        $del = "DELETE FROM student WHERE id=$id";
        $ex = mysqli_query($this->con,$del);
    }
  }
  $crd = new Crud("localhost","root","","ocrud");
  //$crd->OnInsert("mahmudul","mahmudul@gmail.com","mahmudul123");
  $crd->OnSelectData();
  //$crd->OnUpdate();
  $crd->OnDelete('11');
?>