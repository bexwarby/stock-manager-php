<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
    <?php
        /* Declare specific navbar variables */ 
        $siteName = "Stock Manager";
        $links = ["Stock Overview", "Add New", "Contact"];
        /* function to show menu */
        function show_menu ($name, $others) {
            echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="navbar-brand" href="index.php">'.$name.'<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="overview.php">'.$others[0].'</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="newStock.php">'.$others[1].'</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">'.$others[2].'</a>
                            </li>
                        </ul>
                    </div>
                </nav>';
            return; 
        }
    ?>
</body>
</html>