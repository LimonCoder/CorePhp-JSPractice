<?php


class Triangle
{

    public $height;
    public $width;



    public function setHeight($height)
    {
        $this->height = $height;
    }


    public function TotalArea(){
        return $this->height * $this->width;
    }

}

$object = new Triangle();

$object->width = 42;

$object->setHeight(56);

$result = $object->TotalArea();

echo $result;



