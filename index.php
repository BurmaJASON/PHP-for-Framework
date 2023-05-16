<?php
require "./core/boot.php";
require Router::load("routes.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);


// class Post{
//     public $title;
//     public $isPublish;

//     public function __construct($title, $isPublish) 
//     {
//         $this->title = $title;
//         $this->isPublish = $isPublish;
//     }

// }

// $posts = [
//     new Post("Post 1", true),
//     new Post("Post 2", false),
//     new Post("Post 3", true),
//     new Post("Post 4", false),
// ];

// $unPublishPosts = array_filter($posts , function($post) {
//     return !$post->isPublish;
// });
// echo "<pre>";
// var_dump($unPublishPosts) ;



// $titles = array_map(function($post) {
//     return $post->title;
// },$posts);

// echo "<pre>";

// var_dump($titles);