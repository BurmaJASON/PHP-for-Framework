<?php

    // $router->register(
    //     [
    //         "" => "Controllers/IndexController.php",
    //         "about" => "Controllers/AboutController.php",
    //         "contact" => "Controllers/ContactController.php",
    //         "orders" => "Controllers/OrderController.php",
    //         "customer" => "Controllers/CustomerController.php",
    //         "name" => "Controllers/add-name.php",
    //     ]
    // )  

    $router->get("","Controllers/IndexController.php");
    $router->get("about","Controllers/AboutController.php");
    $router->get("contact","Controllers/ContactController.php");
    $router->post("name","Controllers/add-name.php"); 

?>