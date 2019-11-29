<?php
class parent1
{

    public function get()
    {
        echo "animal class ";
    }

}

class child extends parent1{

    public function put()
    {
        echo "lion class ";
    }

}

class child2 extends child
{

    public function demo()
    {
        echo "men class ";
    }

}

$animal=new parent1;
$animal->get();

echo "<br>";


$lion=new child;
$lion->put();

echo "<br>";
$lion->get();
echo "<br>";


$men=new child2;
$men->demo();
echo "<br>";
$men->get();
echo "<br>";
$men->put();











?>