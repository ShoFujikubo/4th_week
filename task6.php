<?php
class Spiceup
{
    public $id1=1;
    public $id2=2;
    public $id3=3;
    public $name1="chris";
    public $name2="ken";
    public $name3="john";
    public $subject1="math";
    public $subject2="physic";
    public $subject3="music";

    public function student1()
    {
        echo $this->id1; echo "<br>";
        echo $this->name1; echo "<br>";
        echo $this->subject1; echo "<br>";
        echo "This is a student1.";

    }

    public function student2()
    {
        echo $this->id2; echo "<br>";
        echo $this->name2; echo "<br>";
        echo $this->subject2; echo "<br>";
        echo "This is a student2.";

    }

    public function student3()
    {
        echo $this->id3; echo "<br>";
        echo $this->name3; echo "<br>";
        echo $this->subject3; echo "<br>";
        echo "This is a student3.";

    }

}

class student1 extends Spiceup
{

}
$student1=new student1;
$student1->student1();
echo "<br>";
echo "<br>";


class student2 extends Spiceup
{

}
$student2=new student2;
$student2->student2();
echo "<br>";
echo "<br>";

class student3 extends Spiceup
{

}
$student3=new student3;
$student3->student3();
echo "<br>";
echo "<br>";






