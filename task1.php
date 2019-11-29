<?php
class Sample
{
  public $a;
  public $b;
  public $c;
  public function add ($a,$b,$c)
  {
      echo $this->a=$a;
      echo "<br>";
      echo $this->b=$b;
      echo "<br>";

      echo $this->c=$c;
      echo "<br>";


      $sum=$a+$b+$c;

      echo $this->sum=$sum;
      echo "<br>";

  }
  public function minus ($a,$b,$c)
  {
    echo $this->a=$a;
    echo "<br>";

    echo $this->b=$b;
    echo "<br>";

    echo $this->c=$c;
    echo "<br>";


    $sub=$a-$b-$c;

    echo $this->sub=$sub;
    echo "<br>";

  }
  public function multi ($a,$b,$c)
  {
      echo $this->a=$a;
      echo "<br>";

      echo $this->b=$b;
      echo "<br>";

      echo $this->c=$c;
      echo "<br>";

      $mul=$a*$b*$c;

      echo $this->mul=$mul;
      echo "<br>";
  }
  public function divi ($a,$b,$c)
  {
      echo $this->a=$a;
      echo "<br>";

      echo $this->b=$b;
      echo "<br>";

      echo $this->c=$c;
      echo "<br>";

     $div=$a/$b/$c;

     echo $this->div=$div;
     echo "<br>";
  }
  
}

$addition=new Sample;

echo "<1>";
echo "<br>";


$addition->add(2,3,4);

echo "<br>";

$substraction=new Sample;

echo "<2>";
echo "<br>";

$substraction->minus(50,30,10);

echo "<br>";

$multiplication=new Sample;

echo "<3>";
echo "<br>";

$multiplication->multi(3,4,5);

echo "<br>";

$division=new Sample;

echo "<4>";
echo "<br>";

$division->divi(100,5,5);







?>