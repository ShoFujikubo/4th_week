<?php
class Mobil
{
    public $id;
    public $price;
    public $name;
    public $color;
    public function get($id,$price,$name,$color)
    {
        echo $this->id=$id;
        echo "<br>";

        echo $this->price=$price;
        echo "<br>";

        echo $this->name=$name;
        echo "<br>";

        echo $this->color=$color;
        echo "<br>";
    }
    
    public function put()
    {
        echo "(This is Samsung)";
        echo "<br>";
    }
   
    public function put1()
    {
        echo "(This is Apple)";
        echo "<br>";
    }
   
    public function put2()
    {
        echo "(This is Google)";
        echo "<br>";
    }

}

$Samsung=new Mobil;

$Samsung->get(1,100,"samsung","blue");

$Samsung->put();

echo "<br>";
echo "<br>";

$Apple=new Mobil;

$Apple->get(2,200,"apple","white");

$Apple->put1();

echo "<br>";
echo "<br>";

$Google=new Mobil;

$Google->get(3,300,"google","green");

$Google->put2();

echo "<br>";
echo "<br>";

echo "Another class from here.";

echo "<br>";
echo "<br>";

class Laptop
{
    public $id;
    public $price;
    public $name;
    public $color;
    public function get($id,$price,$name,$color)
    {
        echo $this->id=$id;
        echo "<br>";

        echo $this->price=$price;
        echo "<br>";

        echo $this->name=$name;
        echo "<br>";

        echo $this->color=$color;
        echo "<br>";
    }
   
    public function put()
    {
        echo "[This is Microsoft]";
    }

    public function put1()
    {
        echo "[This is Macbook]";
    }
    
    public function put2()
    {
        echo "[This is DELL]";
    }

}

$Microsoft=new Laptop;
$Microsoft->get(1,1000,"Microsoft","yellow");
$Microsoft->put();

echo "<br>";
echo "<br>";

$macbook=new Laptop;
$macbook->get(2,2000,"Macbook","gray");
$macbook->put1();

echo "<br>";
echo "<br>";

$dell=new Laptop;
$dell->get(3,3000,"DELL","purple");
$dell->put2();

echo "<br>";
echo "<br>";









?>