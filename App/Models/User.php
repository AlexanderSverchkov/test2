<?php


namespace App\Models;


use App\Db;

class User extends \App\Model
{
    const TABLE = 'users';

    public $email;
    public $name;

}