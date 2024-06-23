<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;

class UserController extends Controller {
    protected $users;
    public function __construct()
    {
        $this->users = new User();
    }
    public function index() {
        // $users = [
        //     new User('John Doe', 'john@example.com'),
        //     new User('Jane Doe', 'jane@example.com')
        // ];
        $user = $this->users->getUser();


        $this->render('user/index', ["user" => $user]);
    }
}
    