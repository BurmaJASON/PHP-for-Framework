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

    $router->get("","PagesController@home");
    $router->get("about","PagesController@about");
    $router->get("contact","PagesController@contact");
    $router->post("names","PagesController@createUser");

    $router->get("users","UserController@index");
    
?>