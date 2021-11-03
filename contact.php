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
        include_once __DIR__."/components/menu.php";
        include_once __DIR__."/components/SecondProduct.php";

        // call menu function
        show_menu($siteName, $links);

        $text = new testProduct\Stock();
    ?>
  
    <!-- Page title -->
    <h3 class="d-block p-2 bg-dark text-white text-center">
        Contact us here!
    </h3>

    <p><?php echo $text->printText(); ?></p>

    <!-- Contact Form -->
    

</body>
</html>