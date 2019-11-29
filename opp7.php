<?php
class Main
{
    public $name1="kanako";
    public $name2="sho";
    public $school="school";

    public function get()
    {
      echo $this->name1;echo "<br>";
      echo $this->name2;echo "<br>";
      echo $this->school;echo "<br>";

    }
    
}

class Sub  extends Main
{

}

$sub=new Main;
$sub->get();




?>