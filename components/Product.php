<?php
    namespace Store;
    // Interface with main functions
    interface IStock
    {
        // functions to access protected values
        public function priceNoTax();
        public function tax();/* 
        // clone function
        public static function cloneNow($object); */
    }
    /* require_once "Other.php";
    require_once "VideoGame.php";
    require_once "Book.php"; */ 
    
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
    
?>