<?php

namespace MVC\Models;

use MVC\Model;

class User extends Model{
    // public $name;
    // public $email;
    protected $table = "users";

    // public function __construct($name, $email) {
    //     $this->name = $name;
    //     $this->email = $email;
    // }
    public function getUser()
    {
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->GetAll();
    }
}
    