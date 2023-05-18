<?php

    // $database->insert([
    //     'name' => $_POST['name'], 
    // ],"users");
    
     $database->insert([
        'description' => "my second todo", 
        'complete' => 0
    ],"tasks");

    header("Location: /");

?>