<?php
    // namespace
    namespace Store;
    include_once "Product.php";
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
?>