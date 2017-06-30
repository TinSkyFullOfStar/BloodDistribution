<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    protected $fillable = [
       'email', 'username' , 'password' ,
    ];
}
