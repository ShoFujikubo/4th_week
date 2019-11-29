<?php
class Spiceup
{
    public $id;

    public $name;

    public function get()
    {
        echo "Im a student of spiceup.";
    }
    
    public function put()
    {
        echo "Im not a student of spiceup.";
    }


}

$sho=new Spiceup;
echo $sho->id=1;

echo "<br>";

echo $sho->name="sho";

echo "<br>";

$sho->get();

echo "<br>";


$rekha=new Spiceup;
echo $rekha->name="rekha";

echo "<br>";

$rekha->put();





?>