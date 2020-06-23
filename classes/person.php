<?php
    class Person{
        public $name;
        public $age;

        function __construct($name,$age){
            $this->name=$name;
            $this->age=$age;
        }

        function getPerson(){
            $person = $this->name. " aki " .$this->age. " éves!";
            return $person;
        }
    }
?>