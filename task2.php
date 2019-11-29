<?php

class car
{
    public $id;
    public $name;
    public $color;
    public $price;
    public function get($id,$name,$color,$price)
    {
        echo $this->id=$id;
        echo "<br>";
        
        echo $this->name=$name;
        echo "<br>";

        echo $this->color=$color;
        echo "<br>";

        echo $this->price=$price;
        echo "<br>";

    }
    
    public function put()
    {
        echo "(This is Audi)";
    }

    public function put1()
    {
        echo "(This is Benz)";
    }

    public function put2()
    {
        echo "(This is Toyota)";
    }
}

$Audi=new car;

$Audi->get(1,"Audi","red",1000);

$Audi->put();

echo "<br>";
echo "<br>";

$Benz=new car;

$Benz->get(2,"Benz","black",2000);

$Benz->put1();

echo "<br>";
echo "<br>";

$Toyota=new car;

$Toyota->get(3,"Toyota","white",3000);

$Toyota->put2();
?>