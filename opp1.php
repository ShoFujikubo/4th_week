<?php

class fruits 
{
    public $id;
    private $name;
    protected $color;
    protected $price;
    

}

$mango=new fruits;

echo $mango->id=1;
echo $mango->name="haha"; //This is string type,so you have to use ""//

echo "<br>";

$apple=new fruits;

echo $apple->color="red";

echo "<br>";

class human{
    public $height;
    public $weight;
    public $age;

}

$man=new human;

echo $man->height=200;
echo $man->price=10;




