<?php
    use Contollers\PagesController;
    use Contollers\UserController;

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

    // $router->get("","PagesController@home");
    // $router->get("about","PagesController@about");
    // $router->get("contact","PagesController@contact");
    // $router->post("names","PagesController@createUser");

    // $router->get("users","UserController@index");


    $router->get("",[PagesController::class,'home']);
    $router->get("about",[PagesController::class,'about']);
    $router->get("contact",[PagesController::class,'contact']);
    $router->post("names",[PagesController::class,'createUser']);
    $router->get("users",[UserController::class,'index']);

    
?>