<?php

// require "core/function.php";
// require "core/database/Connection.php";
// require "core/database/QueryBuilder.php";
// require "core/Router.php";
// require "core/Request.php";
//db connection

    $config = require "config.php";
    $database = new QueryBuilder(Connection::make($config['database']));

?>