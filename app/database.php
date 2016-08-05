<?php
/**
 * Created by PhpStorm.
 * User: 3PMaroc
 *
 * Date: 04/08/2016
 * Time: 23:37
 */
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule =new Capsule();

$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>'127.0.0.1',
    'username'=>'root',
    'password'=>'',
    'database'=>'tasks',
    'charset'=>'utf8',
    'collation'=>'utf8_unicode_ci',
    'prefix'=>'',
]);

$capsule->bootEloquent();
