<?php
class calculation
{
    public $a;
    public $b;
    public $c;
    public $sum;
    public $sub;
    public $mul;
    public $div;

    public function add($a,$b,$c)
        {
            echo $sum=$a+$b+$c;
        }
    
    public function sub($a,$b,$c)
        {
            echo $sub=$a-$b-$c;
        }
    
    public function mul($a,$b,$c)
        {
            echo $mul=$a*$b*$c;
        }

    public function div($a,$b,$c)
        {
            echo $div=$a/$b/$c;
        }
    
}

class add extends calculation
{

}
$add=new add;
$add->add(1,2,3);
echo "<br>";


class min extends calculation
{

}
$min=new min;
$min->sub(1,2,3);
echo "<br>";

class x extends calculation
{

}
$x=new x;
$x->mul(1,2,3);
echo "<br>";

class y extends calculation
{

}
$y=new y;
$y->div(1,2,3);
echo "<br>";









?>