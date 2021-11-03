<?php
    
    // Interface with main functions
    interface IStock
    {
        // functions to access protected values
        public function priceNoTax();
        public function tax();
    }

?>