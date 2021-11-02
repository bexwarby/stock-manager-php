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
                <label for="stockName">Name / Title:</label>
                <input type="text" class="form-control" name="stockName" id="stockName">
            </div>
            <!-- category -->
            <div class="form-group">
                <label for="category">Category:</label>
                <select class="form-control" name="category" id="category">
                    <option value="">--- Choose a category ---</option>
                    <option>Food</option>
                    <option>Clothes</option>
                    <option>Toy</option>
                    <option>Sports equipment</option>
                    <option value="Book">Book</option>
                    <option value="Video game">Video game</option>
                    <option>Other</option>
                </select>
            </div>
            <!-- stock -->
            <div class="form-group">
                <label for="stockAmount">Stock amount:</label>
                <input type="number" class="form-control" name="stockAmount" id="stockAmount">
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
                <input type="number" step="any"  class="form-control" name="excTax" id="excTax">
            </div>
            <!-- tax percentage -->
            <div class="form-group">
                <label for="tax">Tax percentage:</label>
                <input type="number" step="any"  class="form-control" name="tax" id="tax">
            </div>
        </div>
        <!-- Book details -->
        <p><b>Book information:</b></p>
        <div class="form-row">  
            <!-- article name -->
            <div class="form-group">
                <label for="author">Author:</label>
                <input type="text" class="form-control" name="author" id="author">
            </div>
            <!-- category -->
            <div class="form-group">
                <label for="format">Book format:</label>
                <select class="form-control" name="format" id="format">
                    <option value="">--- Choose a format ---</option>
                    <option>Hardcover</option>
                    <option>Paperback</option>
                    <option>Mass-Market Paperback</option>
                    <option>Library Binding</option>
                    <option>Spiral Binding</option>
                    <option>Audiobook (book on CD), unabridged version</option>
                    <option>Audiobook (book on CD), abridged version</option>
                </select>
            </div>
        </div>
        <!-- Video game details -->
        <p><b>Game information:</b></p>
        <div class="form-row">                    
            <!-- Game name -->
            <div class="form-group">
                <label for="ageMin">Minimum age:</label>
                <input type="number" class="form-control" name="ageMin" id="ageMin">
            </div>
            <!-- Game type -->
            <div class="form-group">
                <label for="type">Game type:</label>
                <select class="form-control" name="type" id="type">
                    <option value="">--- Choose a type ---</option>
                    <option>Sandbox</option>
                    <option>Real-time strategy (RTS)</option>
                    <option>Shooters (FPS and TPS)</option>
                    <option>Multiplayer online battle arena (MOBA)</option>
                    <option>Role-playing (RPG, ARPG, and More)</option>
                    <option>Simulation and sports</option>
                    <option>Puzzlers and party games</option>
                    <option>Action-adventure</option>
                    <option>Survival and horror</option>
                    <option>Platformer</option>
                </select>
            </div>
            <!-- Average review score -->
            <div class="form-group">
                <label for="review">Average review score:</label>
                <input type="number" class="form-control" name="review" id="review">
            </div>
            <!-- Ask age -->
            <div class="form-group">
                <label for="age">How old are you?</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>
        </div>
        <!-- Submit button -->
        <input type="submit" name="submit" value="Add to stock">
    </form>
   

</body>
</html>