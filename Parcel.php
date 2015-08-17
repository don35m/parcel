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
?>
