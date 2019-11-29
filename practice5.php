<?php
echo "This is multilevel inheritance.";

echo "<br>";
echo "<br>";

class earth
{
    public $id;
    public $name;
    public $features;
    
    public function get($id,$name,$features)
    {
      echo $this->id=$id; echo "<br>";
      echo $this->name=$name; echo "<br>";
      echo $this->features=$features; echo "<br>";
      echo "I am from earth."; echo "<br>";
    }
}

class japan extends earth
{
  public function put()
  {
      echo "I am from Japan.";
  }
}

class tokyo extends japan
{
    public function demo()
    {
        echo "I am from Tokyo.";
    }
}

$earth = new earth;
$earth->get(11,"Akira","human");
echo "<br>";
echo "<br>";

$japan = new japan;
$japan->get(12,"Sho","japanese");
$japan->put();
echo "<br>";
echo "<br>";

$tokyo = new tokyo;
$tokyo->get(13,"Naruto","ninja");
$tokyo->put();
$tokyo->demo();

?>
