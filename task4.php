<?php
class Fruits
{  
    public $name1="mango";
    public $name2="banana";
    public $name3="apple";
    public $name4="grapes";
    
    public function mango()
    {
        echo $this->name1;
        echo "<br>";
        echo "I am a mango class student.";
    }

    public function banana()
    {
        echo $this->name2;
        echo "<br>";
        echo "I am a banana class student.";
    }

    public function apple()
    {   echo $this->name3;
        echo "<br>";
        echo "I am a apple class student.";
    }

    public function grapes()
    {   echo $this->name4;
        echo "<br>";
        echo "I am a grapes class student.";
    }
}

class Mango extends Fruits
{

}

$mango=new Mango;
$mango->mango();
echo "<br>";

class Banana extends Fruits
{

}

$banana=new Banana;
$banana->banana();
echo "<br>";

class Apple extends Fruits
{

}

$apple=new Apple;
$apple->apple();
echo "<br>";

class Grapes extends Fruits
{

}

$grapes=new Grapes;
$grapes->grapes();
echo "<br>";







?>