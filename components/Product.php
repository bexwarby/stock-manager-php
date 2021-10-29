<?php

    // retrieve post stock items from newStock.php
    $stockName = $_POST["stockName"];
    $category = $_POST["category"];
    $stockAmount = $_POST["stockAmount"];
    $description = $_POST["description"];
    $excTax = $_POST["excTax"];
    $tax = $_POST["tax"];

    // Calculation of price including tax
    $totalValue = $excTax * $stockAmount;
    $perc = $tax / 100;
    $multiply = $perc + 1;
    $incTax = $excTax * $multiply;
    $fullPrice = number_format($incTax, 2, '.', '');
    
    // create new instance of Stock from every inputted stock in the form
    $stockItem = new Stock(
        $stockName,
        $category,
        $stockAmount,
        $description,
        $excTax,
        $tax,
    );
    var_dump($stockItem);
    $stockItem->__set($excTax, $tax);
    
    // call clone function
    $newObject = Stock::cloneNow($stockItem); 
    $newObject->__set($excTax, $tax);
    
    // Stock Object
    class Stock
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
        // functions to access protected values
        public function priceNoTax() {
            return "$this->excTax €";
        }
        public function tax() {
            return "$this->tax %";
        }
        // automatic conversion to a floating point
        public function __set($property, $value) {
            if($property === "excTax" || "tax") {
                $this->$property = (float) $value;
            }
            else {
                $this->property = $value;
            }
        }
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
            $clonedObject = new Stock (
                $_POST["stockName"],
                $_POST["category"],
                $_POST["stockAmount"],
                "",
                $_POST["excTax"],
                $_POST["tax"],
            );
            var_dump($clonedObject);
            return $clonedObject;
        } 
    }
?>