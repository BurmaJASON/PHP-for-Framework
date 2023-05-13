<?php

    require "function.php";
    require "database/Collection.php";
    require "database/QueryBuilder.php";
    
    //db connection
    $pdo = Connection::make();
    $query = new QueryBuilder($pdo);

?>