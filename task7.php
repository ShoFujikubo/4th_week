<?php
class Animal
{
    public $name;
    public $height;
    public $weigh;
    public $color;

    public function get($name,$height,$weigh,$color)
    {
      echo $this->name=$name; echo "<br>";
      echo $this->height=$height; echo "<br>";
      echo $this->weigh=$weigh; echo "<br>";
      echo $this->color=$color; echo "<br>";

    }


}

class dog extends Animal
{

}
$dog=new dog;
$dog->get("dog","100cm","10kg","white");
echo "<br>";


class bird extends Animal
{

}
$bird=new bird;
$bird->get("bird","50cm","5kg","brown");
echo "<br>";


class  lion extends Animal
{

}
$lion=new lion;
$lion->get("lion","200cm","300kg","gold");
echo "<br>";





?>