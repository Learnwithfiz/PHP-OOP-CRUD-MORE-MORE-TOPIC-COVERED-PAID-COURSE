<?php  
  class car{
    private  $model ;
    protected $color ;
    public $year ;

    public function setModel($model){
        $this->model = $model ;

    }
    public function getmodel(){
        return $this->model ;
    }
    protected function SetColor($color){
        $this->color= $color ;
    }
    public function getColor(){
        return  $this->color;
    }
  }
  $car  = new car();
  $car->setModel("Toyota");
  $car->year = 2023 ;
  
  echo $car->getmodel();
  echo $car->year;


?>