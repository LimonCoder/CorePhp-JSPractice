<?php


class Person
{
    public $name;
    public $age;
    public $height;
    public $width;


   public function getAge(){
       echo $this->age."<br>";
   }

    public function getName()
    {
        return $this->name;
    }





}

$shoikot = new Person();

$shoikot->name = "Mahmudul Kader";
$shoikot->age = "23";
$shoikot->height = "6.0";

echo $shoikot->name."<br>";
echo $shoikot->age;