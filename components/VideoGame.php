<?php
    // namespace
    namespace Store;
    include_once "Product.php";
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
        // function to construct with author and description added, with VAT 5.5%
        public function __construct($stockName, $category, $stockAmount, $description, $excTax, $tax, $type, $ageMin, $review) {
            // call all 6 parameters in parent constructor, replacing category and tax values in the right order
            parent::__construct($stockName, "Video game", $stockAmount, $description, $excTax, 20);
            $this->type = $type;
            $this->ageMin = $ageMin;
            $this->review = $review;
        }
    }
?>