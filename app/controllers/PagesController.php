<?php

namespace App\Controllers;

class PagesController
{
    public function home(){
//        $users = App::get('database')->selectAll('users');
//        require 'views/index-form.view.php';
//        return view('index-form');
//        return view('index-form', compact($users));
        // or
//        return view('index-form', ['users' => $users]);

        return view('index-form');
    }

    public function about(){
//        require 'views/about.view.php';
        return view('about');
    }

    public function contact(){
//        require 'views/contact.view.php';
        return view('contact');
    }
}