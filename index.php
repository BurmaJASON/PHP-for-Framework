<?php

require "./boot.php";
//  fetchTasks
//  $tasks = $query->selectAll("tasks");
 $users = $query->selectAll("users");
    
dd($users);

require "index.view.php";
