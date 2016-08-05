<?php

/**
 * Created by PhpStorm.
 * User: 3PMaroc
 * Date: 03/08/2016
 * Time: 23:23
 */
class controller
{
    public function model($model)
    {
       require_once "../app/models/".$model.'.php';
        return new $model();
    }

    /**
     * @param $view
     * @param $data
     *
     * @return mixed
     */
    public function render($view,$data = [])
    {
       require_once "../app/views/".$view.'.php';
    }

}
