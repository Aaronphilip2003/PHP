<?php    
class Car
{      
    public $color;
    public $model;

    public function __construct($color,$model)
    {
        $this->color=$color;
        $this->model=$model;
    }
    public function getMessage(){
        return "My car is a ".$this->color." ".$this->model."!";
    }
}
$myCar=new Car("black","volvo");
echo $myCar->getMessage();
echo "<br>"
?>
