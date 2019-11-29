<?php
class BOOK
{
    public $name;
    public $id;
    public $a;
    public $b;
    public $sum;

    public function get()
    {
     echo "hi,welcome.";
    }


    public function put($name,$id)
    {
      echo $this->name=$name;
      echo $this->id=$id;
    }


    public function add($a,$b)
    {
      echo $this->a=$a;
      echo $this->b=$b;
      $sum=$a+$b;
      echo $this->sum=$sum;

    }
}

$object=new BOOK;
$object->name="php";
$object->id=5;

echo $object->name;



echo $object->id;

$object->get();


$object->put("ken",6);

$object->add(8,20);

?>