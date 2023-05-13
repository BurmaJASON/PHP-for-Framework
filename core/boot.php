<?php

    $config = require "config.php";
    require "function.php";
    require "database/Connection.php";
    require "database/QueryBuilder.php";
    require "core/Router.php";
    require "core/Request.php";
    //db connection

    $query = new QueryBuilder(Connection::make($config['database']));

?>