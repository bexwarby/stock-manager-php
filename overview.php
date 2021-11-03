<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Stock Overview</title>
</head>
<body>

    <?php
        // imports
        include_once __DIR__."/components/menu.php";
        include_once __DIR__."/components/Product.php";
        // call menu function
        show_menu($siteName, $links);
    ?>

    <!-- Page title -->
    <h3 class="d-block p-2 bg-dark text-white text-center">
        Your Current Stock
    </h3>

    <!-- Table displaying stock -->
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Stock</th>
                <th scope="col">€ excl tax</th>
                <th scope="col">€ inc tax</th>
                <th scope="col">Tax %</th>
                <th scope="col">Total value</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Heinz Baked Beans</th>
                <td>Food</td>
                <td>Baked beans from UK</td>
                <td>1247</td>
                <td>1.60€</td>
                <td>1.76€</td>
                <td>10</td>
                <td></td>
                <td><button>Modify</button></td>
            </tr>
            <tr>
                <th scope="row">Developer's Duck</th>
                <td>Toys</td>
                <td>Little toy duck meant for developers and children</td>
                <td>13056</td>
                <td>3.50€</td>
                <td>3.85€</td>
                <td>10</td>
                <td></td>
                <td><button>Modify</button></td>
            </tr>
            <!-- Display inputted stock item -->
            <tr>
                <!-- Stock name -->
                <th scope="row">
                    <?php if (isset($stockName)) {
                        echo $stockItem->stockName; 
                    }?>
                </th>
                <!-- Category -->
                <td>
                    <?php if (isset($category)) {
                        echo $stockItem->category; 
                    }?>
                </td>
                <!-- Description -->
                <td>
                    <?php if (isset($description)) {
                        echo $stockItem->description; 
                    }?>
                </td>
                <!-- Amount of stock -->
                <td>
                    <?php if (isset($stockAmount)) { 
                        echo $stockItem->stockAmount; 
                    }?>
                </td>
                <!-- Price before tax -->
                <td>
                    <?php if (isset($excTax)) { 
                        echo $stockItem->priceNoTax(); 
                    }?>
                </td>
                <!-- Price with tax -->
                <td>
                    <?php echo $fullPrice; ?> €
                </td>
                <!-- Tax percentage -->
                <td>
                    <?php if (isset($tax)) { 
                        echo $stockItem->tax(); 
                    }?>
                </td>
                <!-- Total value -->
                <td>
                    <?php echo $totalValue; ?> €
                </td>
                <!-- Modify button -->
                <td><button>Modify</button></td>
            </tr>
            <!-- Display cloned stock item -->
            <tr>
                <!-- Stock name -->
                <th scope="row">
                    <?php if (isset($stockName)) {
                        echo $newObject->stockName; 
                    }?> COPY
                </th>
                <!-- Category -->
                <td>
                    <?php if (isset($category)) {
                        echo $newObject->category; 
                    }?>
                </td>
                <!-- Description -->
                <td>
                    <?php if (isset($description)) {
                        echo $newObject->description; 
                    }?>
                </td>
                <!-- Amount of stock -->
                <td>
                    <?php if (isset($stockAmount)) { 
                        echo $newObject->stockAmount; 
                    }?>
                </td>
                <!-- Price before tax -->
                <td>
                    <?php if (isset($excTax)) { 
                        echo $newObject->priceNoTax(); 
                    }?>
                </td>
                <!-- Price with tax -->
                <td>
                    <?php echo $fullPrice; ?> €
                </td>
                <!-- Tax percentage -->
                <td>
                    <?php if (isset($tax)) { 
                        echo $newObject->tax(); 
                    }?>
                </td>
                <!-- Total value -->
                <td>
                    <?php echo $totalValue; ?> €
                </td>
                <!-- Modify button -->
                <td><button>Modify</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Display the title, author and description using Book method -->
    <div>
        <?php 
            if ($category === "Book") {
                $stockItem->bookDisplay();
            }
        ?> 
    </div>

    <!-- Call age check method in Video class -->
    <div>
        <?php 
            $age = $_POST["age"];
            if ($category === "Video game") {
                $stockItem->ageCheck($age);
            }
        ?> 
    </div>
    
</body>
</html>