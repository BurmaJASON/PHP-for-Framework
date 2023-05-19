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
?>