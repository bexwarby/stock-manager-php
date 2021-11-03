<?php
    // namespace
    namespace Store;
    include_once "Product.php";
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
?>