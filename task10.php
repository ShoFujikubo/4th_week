<?php
class products
{
    public $id;
    public $name;
    public $price;
    public $quantity;

    public function get($id,$name,$price,$quantity)
    {
      echo $this->id=$id; echo "<br>";
      echo $this->name=$name; echo "<br>";
      echo $this->price=$price; echo "<br>";
      echo $this->quantity=$quantity; echo "<br>";
      echo "This is Products.";
    }
}

class electronic extends products
{
    public function put()
    {
     echo "This is Electronic.";
    }
}

class mobile extends electronic
{
    public function demo()
    {
     echo "This is mobil.";
    }
}

$products=new products;
$products->get(1,"products",1000,2000);
echo "<br>";
echo "<br>";


$electronic=new electronic;
$electronic->get(2,"electronic",500,1000);
echo "<br>";
$electronic->put();
echo "<br>";
echo "<br>";

$mobile=new mobile;
$mobile->get(3,"mobile",250,500);
echo "<br>";
$mobile->put();
echo "<br>";
$mobile->demo();










?>