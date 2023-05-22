<?php

    use core\App;
    class PagesController{
        public function home() {
            $users = App::get("database")->selectAll("users");
            // require "views/index.view.php";
            view('index',[
                "users" => $users
            ]);
        }

        public function about() {
            view('about');
        }

        public function contact() {
            view('contact');
        }

        public function createUser() {
            
            App::get("database")->insert([
                'name' => request('name')
            ],"users");

            redirect('/');
        
        }
    }


?>