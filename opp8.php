<?php
class example
{
    public $a=10;
    protected $b=20;
    private $c=30;

    public function get()
    {
        echo "Hello World!";
    }
}

class demo extends example
{
   public function put()
   {
       echo $this->a;
   }
}

$animal=new demo;
$animal->get();
echo "<br>";
$animal->put();
echo "<br>";





?>