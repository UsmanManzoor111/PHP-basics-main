<?php



// $apple = 5;

// echo $apple;


class fruit{
    public $name;

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$apple = new fruit();
$apple->set_name("Apple");
echo " <h1> fruit is : ". $apple->get_name() . "</h1>";

$banana = new fruit();
$banana->set_name("Banana");
echo " <h1> fruit is : ". $banana->get_name() . "</h1>";

class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_name(){
        return $this->name;
    }
    function get_color(){
        return $this->color;
    }
}

$apple = new fruit("Apple", "Yellow");
echo "<h3> Color is " .$apple->get_name() ." and " . $apple->get_color() ."</h3>"

class fruit{
    public $name;
    public $color;

    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    function __destruct(){
        echo "<h3> The fruit is {$this->name} and its color is {$this->color}</h3>";
    }
}
$apple = new fruit("Apple", "Yellow");



// Inheritance has two classes parent class and child class

class fruit{
    public $name;
    public $color;

    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

   public function intro(){
    echo "<h3> {$this->name} is a fruit and its color is {$this->color}.</h3>";
   }
}

class orange extends fruit{
    function message(){
        echo "<h3> Fruit Desciption:</h3>";
    }
}

$orange = new orange("Orange", "Orange");
$orange->message();
$orange->intro();


// Polymorphism
class fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "<h3> {$this->name} is a fruit and its color is {$this->color}.</h3>";
    }
}

class cherry extends fruit
{
    public $name;
    public $color;
    public $weight;

    public function __construct($name, $color, $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    public function intro()
    {
        echo "<h3> {$this->name} is a fruit and its color is {$this->color} and its weight is {$this->weight}.</h3>";
    }
}

$cherry = new cherry("Apple", "Yellow", "5kg");
$cherry->intro();