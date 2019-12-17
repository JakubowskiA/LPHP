<?php
class Pet{
    var $name;
    var $age;
    var $species;


    // $pet1 = new Pet;

    // $pet1->name = “Baby”;
    // $pet1->age = 7;
    // $pet1->species = “Dog”;

    function __construct( $petName, $petAge, $petSpecies){ 
        $this->name = $petName;
        $this->age = $petAge;
        $this->species = $petSpecies;
    }

    function happyBirthday(){
        $this->age++;
        echo "Happy Birthday, $this->name!<br>";
        echo "You are now $this->age years old!<br>";
    }

}

$pet1 = new Pet("Baby", 7, "Dog");
echo "$pet1->name<br>";
echo "$pet1->age<br>";

$pet1->happyBirthday()

  



?>