<?php
class A
{
   public $a;
   protected $b;
   private $c;
   public function get($a,$b,$c)
   {
     $sum=$a+$b+$c;
     echo $this->sum=$sum;
   }

}

class B extends A
{
   private $d;
   public function put($a,$b,$d)
   {
       $sub=$a-$b-$d;
       echo $this->sub=$sub;

   }
}

$go=new B;
$go->put(10,3,2);


?>