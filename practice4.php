<?php
class BOOK
{
    public $id;
    public $name;
    public $a;
    public $b;
    public $c;
    protected $d;
    public function get()
    {
        echo "hello, world.";
    }

    public function put($id,$name)
    {
        echo $this->id = $id; echo "<br>";
        echo $this->name = $name;
    }

    public function add($a,$b,$c)
    {
        $sum = $a + $b + $c;
        echo $this->sum = $sum;
    }
}

$object = new BOOK;

$object->name = "GlobalVillage";

$object->id = 5;

echo $object->name;  echo "<br>";

echo $object->id; echo "<br>";

$object->get(); echo "<br>";

$object->put(11,"Akira"); echo "<br>";

$object->add(20,670,889); echo "<br>";

echo "<br>";

echo "From here, I am going to use inheristance";

echo "<br>";

class Main
{
    public $name1 = "Taylor";
    public $name2 = "Billie";
    public $company = "sm";

    public function get()
    {
        echo $this->name1; echo "<br>";
        echo $this->name2; echo "<br>";
        echo $this->company; echo "<br>";
    }
}
class Sub extends Main
{
}

$sub = new Sub;

$sub ->get();

echo "<br>";

class Animal
{
    public $name;
    public $height;
    public $color;
    public function get ($name,$height,$color)
    {
        echo $this->name=$name; echo "<br>";
        echo $this->height=$height; echo "<br>";
        echo $this->color=$color; echo "<br>";
    }
}
class dog extends Animal
{
}
$dog = new dog;
$dog->get("dog","50cm","white");







?>






