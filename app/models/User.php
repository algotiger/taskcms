<?php

/**
 * Created by PhpStorm.
 * User: 3PMaroc
 * Date: 04/08/2016
 * Time: 22:10
 */

use Illuminate\Database\Eloquent\Model as Eloquent;
class User extends Eloquent
{
    public $user;

    public $timestamps = [];
    protected $fillable = ['name','email'];

}
