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
        // call menu function
        show_menu($siteName, $links);
    ?>
    
    <!-- Home page -->
    <h1 class="d-block p-2 bg-primary text-white text-center">Stock Manager Ltd</h1>
    <h3 class="d-block p-2 bg-dark text-white text-center">We are here to help <i>YOU</i>!</h3>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/inventory.jpg" alt="First slide">
            </div>
        </div>
    </div>

</body>
</html>