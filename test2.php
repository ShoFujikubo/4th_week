<?php
class demo
{   
    public $id;
    public $name;
    public $color;
    public function get($id,$name,$color)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->color=$color; echo "<br>";

    }


}

class konoha extends demo
{

}

class suna extends demo
{

}

class oto extends demo
{

}


$naruto=new konoha;
$naruto->get(1,"naruto","orange");
echo "<br>";

$gara=new suna;
$gara->get(2,"gara","white");
echo "<br>";


$orochi=new oto;
$orochi->get(3,"orochimaru","parpule");
echo "<br>";












?>