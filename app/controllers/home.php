<?php

/**
 * Created by PhpStorm.
 * User: 3PMaroc
 * Date: 03/08/2016
 * Time: 23:34
 */
class home extends Controller

{


    public function index($name ='aa')
    {
        $users = User::all();
        $this->render('home/index',['users'=>$users]);

    }

    public function create($name ='',$email='')
    {
        User::create([
           'name'=>$name,
           'email'=>$email
        ]);

    }
}
