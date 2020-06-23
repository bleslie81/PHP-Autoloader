<?php
    class House{
        public $fajta;
        public $erteke;

        function __construct($fajta,$erteke){
            $this->fajta=$fajta;
            $this->erteke=$erteke;
        }

        function getHouse(){
            $house = $this->fajta. " típusú, amelynek értéke: " .$this->erteke." forint!";
            return $house;
        }
    }
?>