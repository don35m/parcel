<?php

class Parcel
{
    private $weight;
    private $height;
    private $width;
    private $length;

    function __construct($parcel_weight, $parcel_height, $parcel_width, $parcel_length)
    {
        $this->weight = $parcel_weight;
        $this->height = $parcel_height;
        $this->width = $parcel_width;
        $this->length = $parcel_length;
    }

    function setWeight($newWeight)
    {
        $this->weight = $newWeight;
    }
    function getWeight()
    {
        return $this->weight;
    }

    function setHeight($newHeight)
    {
        $this->height = $newHeight;
    }
    function getHeight()
    {
        return $this->height;
    }

    function setWidth($newWidth)
    {
        $this->width = $newWidth;
    }
    function getWidth()
    {
        return $this->width;
    }

    function setLength($newLength)
    {
        $this->length = $newLength;
    }
    function getLength()
    {
        return $this->length;
    }
}

$user_parcel = new Parcel($_GET['weight'], $_GET['height'], $_GET['width'], $_GET['length']);

function volume($user_parcel)
{
    $user_height = $user_parcel->getHeight();
    $user_width = $user_parcel->getWidth();
    $user_length = $user_parcel->getLength();

    return ($user_height * $user_width * $user_length);
}

function shipCost($user_parcel)
{
    $user_weight = $user_parcel->getWeight();

    return ($user_weight * volume($user_parcel))*.25;
}

?>
