<?php
class Main
{
    public $id=1;
    public $name="chris";
    public $contact="gogo@example.com";
    public $country="Canada";
    
    public function get()
    {
      echo $this->id; echo "<br>";
      echo $this->name; echo "<br>";
      echo $this->contact; echo "<br>";
      echo $this->country; echo "<br>";

    }

}

class Sub1 extends Main
{

}

$sub1=new Main;
$sub1->get();

?>