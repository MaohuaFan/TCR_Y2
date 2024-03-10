<?php

    class Person {

        // Attributes
        protected $name;

        protected $age;

        // Constructor
        public function __construct($name)
        {
            $this->name = $name;
        }
    }

    // Methods
    public function getAge() {
        return $this->age/* *365 */;
    }

    public function setAge($age) {
        
        if ($age < 18) {
            throw new Exception("Person is not old enough.");
        }
        $this->age = $age;
    }

    // Program
    $john = new Person('John Doe');
    
    $john->age = 30;
    #$john->age = 15;

    var_dump($john);

?>