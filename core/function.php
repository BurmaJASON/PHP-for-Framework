<?php
    function dd($task) {
        echo "<pre>";
        return die(var_dump($task));
    }

    function view($name,$data=[]) {
        // extract receive associated array and get the arrary key and make this able to use as variable with values
        extract($data);
        return require "views/$name.view.php";
    }

    function redirect($uri) {
        header("Location: $uri");
    }

    function request($data) {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            return $_POST[$data];
        };

        if($_SERVER['REQUEST_METHOD'] === 'GET') {
            return $_GET[$data];
        };
    }
?>