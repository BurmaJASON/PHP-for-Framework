<?php

    $router->register(
        [
            "" => "Controllers/IndexController.php",
            "about" => "Controllers/AboutController.php",
            "contact" => "Controllers/ContactController.php",
            "orders" => "Controllers/OrderController.php",
            "customer" => "Controllers/CustomerController.php",
        ]
    )  

?>