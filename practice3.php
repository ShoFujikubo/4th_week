<?php
class student
{   
    public $id;
    public $name;
    protected $phone;
    protected $email;
}

class  sho extends student
{
   private $fee;

   public function get($id,$name,$phone,$email,$fee)
   {
       echo $this->id=$id; echo "<br>";
       echo $this->name=$name; echo "<br>";
       echo $this->phone=$phone; echo "<br>";
       echo $this->email=$email; echo "<br>";
      

   }
}



$pop=new sho;
$pop->get(1,"sho",8888888,"ha@com",500);


echo "<br>";
echo "<br>";
echo "<br>";



class kanako extends student
{   
    private $fee;

    public function put($id,$name,$phone,$email,$fee)
    {
        echo $this->id=$id; echo "<br>";
        echo $this->name=$name; echo "<br>";
        echo $this->phone=$phone; echo "<br>";
        echo $this->email=$email; echo "<br>";
   
 
    }
}


$lock=new kanako;
$lock->put(2,"kanako",9999999,"ko@com",500);



?>