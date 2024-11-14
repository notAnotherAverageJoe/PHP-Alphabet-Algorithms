<?php

// Small example of OOP uses

class Adventurer
{
    public $health;
    public $race;
    public $class;

    // Constructor to initialize the adventurer's properties
    public function __construct($health, $race, $class)
    {
        $this->health = $health;
        $this->race = $race;
        $this->class = $class;
    }

    // Method to greet the adventurer
    public function greet()
    {
        return "Hello, I am a " . $this->race . " " . $this->class . " with " . $this->health . " health.\n";
    }
    public function find_name()
    {
        echo "Enter your name adventurer: ";
        $name = fgets(STDIN);
        $name = trim($name);

        echo "The adventurers name is " . $name . "\n";
    }
}

// Create an instance of Adventurer
$adventurer1 = new Adventurer(100, 'Elf', 'Warrior');

// Call the greet method
echo $adventurer1->greet();
$adventurer1->find_name();
