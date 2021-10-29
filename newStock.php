<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Stock Manager</title>
</head>
<body>

    <?php
        // imports
        include __DIR__."/components/menu.php";
        /* include __DIR__."/components/Product.php"; */
        // call menu function
        show_menu($siteName, $links);
    ?>

    <!-- Page title -->
    <h3 class="d-block p-2 bg-dark text-white text-center">Add or update your stock</h3>

    <!-- Input new stock - updates on overview.php -->
    <form action="overview.php" method="POST">
        <!-- First row -->
        <div class="form-row">
            <!-- article name -->
            <div class="form-group">
                <label for="stockName">Name</label>
                <input type="text" class="form-control" name="stockName" id="stockName" placeholder="Baked beans">
            </div>
            <!-- category -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="exampleFormControlSelect1">
                    <option>Food</option>
                    <option>Clothes</option>
                    <option>Toys</option>
                    <option>Sports equipment</option>
                    <option>Other</option>
                </select>
            </div>
            <!-- stock -->
            <div class="form-group">
                <label for="stockAmount">Stock amount:</label>
                <input type="number" class="form-control" name="stockAmount" id="stockAmount" placeholder="43">
            </div>
        </div>
        <!-- Second row -->
        <div class="form-row">
            <!-- description -->
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>
            <!-- price before tax -->
            <div class="form-group">
                <label for="excTax">Price excluding tax:</label>
                <input type="number" step="any"  class="form-control" name="excTax" id="excTax" placeholder="3.40">
            </div>
            <!-- tax percentage -->
            <div class="form-group">
                <label for="tax">Tax percentage:</label>
                <input type="number" step="any"  class="form-control" name="tax" id="tax" placeholder="15">
            </div>
        </div>
        <input type="submit" name="submit" value="Add to stock">
    </form>

    <div>
        
    </div>

</body>
</html>