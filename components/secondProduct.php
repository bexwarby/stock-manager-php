<?php

    // namespace
    namespace testProduct;

    // create class object
    class Stock {
        // declare variable
        public $text = "I am a test class with the same name as Product.php but a different namespace";
        // function to print text
        public function printText() {
            return $this->text;
        }
    }

?>