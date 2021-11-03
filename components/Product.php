<?php

    namespace Store;
    /* include_once "instances.php"; */
    // Interface with main functions
    interface IStock
    {
        // functions to access protected values
        public function priceNoTax();
        public function tax();
    }
    
    // Create namespace
    namespace Store;
    // Abstract Stock Object
    abstract class Stock implements IStock
    {
        // product name
        public $stockName;
        // product category
        public $category;
        // stock amount - protected
        public $stockAmount;
        // product description
        public $description;
        // price excluding tax
        protected $excTax;
        // tax percentage
        protected $tax;
        
        // Functions to access protected values
        public function priceNoTax() {
            return "$this->excTax €";
        }
        public function tax() {
            return "$this->tax %";
        }

        // Automatic conversion to a floating point
        public function __set($property, $value) {
            if($property === "excTax") {
                $this->$property = (float) $value;
            }
            else {
                $this->property = $value;
            }
        }

        // Constructor function
        public function __construct($stockName, $category, $stockAmount, $description, $excTax, $tax) {
            $this->stockName = $stockName;
            $this->category = $category;
            $this->stockAmount = $stockAmount;
            $this->description = $description;
            $this->excTax = $excTax;
            $this->tax = $tax;
        }    
    } 

    // class for books, heritage from Stock
    class Book extends Stock 
    {
        // book author
        public $author;
        // book format
        public $format;
        // function to display title, author and description
        public function bookDisplay(/* $stockName, $author, $description */) {
            echo "$this->stockName, $this->author, $this->description";
        }
        // function to construct with author and description added, with VAT 5.5%
        public function __construct($stockName, $category, $stockAmount, $description, $excTax, $tax, $author, $format) {
            parent::__construct($stockName, "Book", $stockAmount, $description, $excTax, 5.5);
            $this->author = $author;
            $this->format = $format;
        }
    }

    // generic items, heritage from Stock
    class Other extends Stock 
    {
        // constructor function
        public function __construct($stockName, $category, $stockAmount, $description, $excTax, $tax) {
            $this->stockName = $stockName;
            $this->category = $category;
            $this->stockAmount = $stockAmount;
            $this->description = $description;
            $this->excTax = $excTax;
            $this->tax = $tax;
        }
        
        // clone function
        public static function cloneNow($object) {
            // create clone based on $stockItem, with a blank description
            $clonedObject = new Other (
                $_POST["stockName"],
                $_POST["category"],
                $_POST["stockAmount"],
                "",
                $_POST["excTax"],
                $_POST["tax"],
            );/* 
            var_dump($clonedObject); */
            return $clonedObject;
        }  
    }

    // class for video games, heritage from Stock
    class VideoGame extends Stock 
    {
        // type of game
        public $type;
        // minimum age
        public $ageMin;
        // average review score
        public $review;
        // check if user is old enough
        public function ageCheck ($age) {
            $difference = $this->ageMin - $age;
            if ($age >= $this->ageMin) {
                echo "You are welcome to play this game";
            } else {
                echo "Sorry, you are not yet old enough. You can play in $difference years!";
            }
        }
        // display game details
        public function displayGame ($game) {
            echo "$game->$category, min age: $game->$minAge, game type: $game->$type";
        }
        // function to construct with author and description added, with VAT 5.5%
        public function __construct($stockName, $category, $stockAmount, $description, $excTax, $tax, $type, $ageMin, $review) {
            // call all 6 parameters in parent constructor, replacing category and tax values in the right order
            parent::__construct($stockName, "Video game", $stockAmount, $description, $excTax, 20);
            $this->type = $type;
            $this->ageMin = $ageMin;
            $this->review = $review;
        }
    }

    // retrieve post stock items from newStock.php
    $stockName = $_POST["stockName"];
    $category = $_POST["category"];
    $stockAmount = $_POST["stockAmount"];
    $description = $_POST["description"];
    $excTax = $_POST["excTax"];
    $tax = $_POST["tax"];
    // book items
    $author = $_POST["author"];
    $format = $_POST["format"];
    // video game items
    $type = $_POST["type"];
    $ageMin = $_POST["ageMin"];
    $review = $_POST["review"];

    // Calculation of price including tax
    $totalValue = $excTax * $stockAmount;
    $perc = $tax / 100;
    $multiply = $perc + 1;
    $incTax = $excTax * $multiply;
    $fullPrice = number_format($incTax, 2, '.', '');

    // age difference calculation
    $age = $_POST["age"];

    // create new instance of NewStock or child classes from every form input
    if ($category !== "Book" && $category !== "Video game") {
        $stockItem = new Other (
            $stockName,
            $category,
            $stockAmount,
            $description,
            $excTax,
            $tax,
        );
        var_dump($stockItem);
    } elseif ($category === "Book") {
        $stockItem = new Book (
            $stockName, 
            $category, 
            $stockAmount, 
            $description, 
            $excTax, 
            $tax, 
            $author, 
            $format,
        );
    } else { $stockItem = new VideoGame (
            $stockName, 
            $category, 
            $stockAmount, 
            $description, 
            $excTax, 
            $tax, 
            $type, 
            $ageMin, 
            $review,
        );
    }
    
    var_dump($stockItem); 
    $stockItem->__set($excTax, $tax);
    
    // call clone function
    $newObject = Other::cloneNow($stockItem); 
    $newObject->__set($excTax, $tax);
    
?>