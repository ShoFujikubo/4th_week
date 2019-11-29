<?php
class animal
{
    public $id;
    public $name;
    public $color;
    public $features;

}

class dog extends animal
{
    public function get($id,$name,$color,$features)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->color=$color;  echo "<br>";
        echo $this->features=$features;  echo "<br>";
        echo "We are dogs.";

    }
}

$dog=new dog;
$dog->get(1,"dog","brown","strong");

echo "<br>";
echo "<br>";
echo "<br>";

class cat extends animal
{
    public function put($id,$name,$color,$features)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->color=$color;  echo "<br>";
        echo $this->features=$features;  echo "<br>";
        echo "We are cats.";
    }
}

$cat=new cat;
$cat->put(2,"cat","white","cute");

echo "<br>";
echo "<br>";
echo "<br>";

class human extends animal
{
    public function demo($id,$name,$color,$features)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->color=$color;  echo "<br>";
        echo $this->features=$features;  echo "<br>";
        echo "We are human.";
    }
    
}

$human=new human;
$human->demo (3,"human","flesh","smart");

echo "<br>";
echo "<br>";
echo "<br>";




?>