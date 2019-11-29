<?php
class example
{
  public $id;
  public $name;
  public $country;
  public function get($id,$name,$country)
  {
     echo $this->id=$id; echo "<br>";
    echo $this->name=$name; echo "<br>";
      echo $this->country=$country; echo "<br>";
  }
}

$canada=new example;
$canada->get(1,"shawn","canada");

$us=new example;
$us->get(2,"ken","us");

$uk=new example;
$uk->get(3,"naomi","uk");

$japan=new example;
$japan->get(4,"chris","japan");

?>

