<?php
class BOOKS
{
    public $price;
    public $var;
    public function get($var)
    {
        echo $this->price=$var;
    }



}

$php=new BOOKS;
$php->get(200);

echo "<br>";

$python=new BOOKS;
$python->get(300);





?>