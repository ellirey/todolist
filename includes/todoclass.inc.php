<?php

class TodoClass {

    public $age;

    public function __construct($age) {
        $this->age = $age;
    }
    public function index() {
        
    }

    public function getAge(){
        echo $this->age;
    }
}

$object = new TodoClass(31);

$object->getAge();

?>