<?php

require "./boot.php";

//  fetchTasks
//  $tasks = $query->selectAll("tasks");
 $tasks = $query->selectAll("tasks$tasks");
    
dd($tasks);

require "index.view.php";
