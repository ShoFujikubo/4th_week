<?php
class main
{
    public $id;
    public $name;
    public $phone;
    public $email;
    public $country;
    public $address;
    
    public function get($id,$name,$phone,$email,$country,$address)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->phone=$phone; echo "<br>";
        echo $this->email=$email; echo "<br>";
        echo $this->country=$country; echo "<br>";
        echo $this->address=$address; echo "<br>";
        
        echo "Single inheritance";

    }
    

}

class child extends main
{

}

$cell=new child;
$cell->get(1,"sho",7777777,"fujikubo@com","canada","kagoshima");





?>