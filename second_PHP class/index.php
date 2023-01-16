<?php
/**
 * Class Mathematic Figures
 */
class Recatangle {
  private $nameOfShape;
  private $P;
  private $S;
  private $x;
  private $y;


  function __construct($x, $y)
  {
    $this->x = (int)$x;
    $this->y = (int)$y;
  }

  public function getName(){
    return $this->nameOfShape;
  }
  public function setName($nameOfShape){
    $this->nameOfShape = $nameOfShape;
  }

  public function getX(){
    return $this->x;
  }
  public function setX($x){
    $this->x = (int)$x;
  }

  public function getY(){
    return $this->y;
  }
  public function setY($y){
    $this->y = (int)$y;
  }


  public function getSquare(){
    return $this->x*$this->y;
  }
  public function getPerimeter(){
    return ($this->x+$this->y)*2;
  }
}

$rectangle = new Recatangle(4,5);
$rectangle->setName("Rectangle");
echo "Name of shape is: ".$rectangle->getName();
echo "<br>";
echo "Perimeter = ".$rectangle->getPerimeter();
echo "<br>";
echo "Square = ".$rectangle->getSquare();
echo "<br>";
echo "x = ".$rectangle->getX();
echo "<br>";
echo "y = ".$rectangle->getY();

?>
