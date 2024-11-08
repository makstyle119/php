<?php 
/* --- Object Oriented Programming -- */

/*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    private $name;
    public $email;
    public $password;

    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password) {
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    // Methods are functions that belong to a class.
    public function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$user1 = new User('Moiz', 'moiz@test.com', 'some-password');
$user2 = new User('Maria', 'moiz@test.com', 'some-password');

// $user1->name = 'MAK'; // you can't access a protected property
$user2->set_name('MAK');

var_dump($user1);

echo $user2->get_name();

// Inheritance

class employee extends User {

    private $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);

        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employ1 = new employee('moiz ali', 'moiz.ali@test.com', 'someCoolPassword123!', 'Software Engineer'); 

// var_dump($employ1);

echo $employ1->get_title();
