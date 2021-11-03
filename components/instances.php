<?php
    include_once "Product.php";
    include_once "Other.php";
    include_once "Book.php";
    include_once "VideoGame.php";

    use Store\Other as A;
    use Store\Book as B;
    use Store\VideoGame as C;

    // create new instance of NewStock or child classes from every form input
    if ($category !== "Book" && $category !== "Video game") {
        $stockItem = new A (
            $stockName,
            $category,
            $stockAmount,
            $description,
            $excTax,
            $tax,
        );
    } elseif ($category === "Book") {
        $stockItem = new B (
            $stockName, 
            $category, 
            $stockAmount, 
            $description, 
            $excTax, 
            $tax, 
            $author, 
            $format,
        );
    } else { $stockItem = new C (
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
    $newObject = A::cloneNow($stockItem); 
    $newObject->__set($excTax, $tax);

?>