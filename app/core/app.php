<?php

class App{



    protected $conroller;
    protected $method;
    protected $params = [];
    public function __construct()
    {
        echo "<pre>";
        print_r($this->parsUrl());

    }

    public function parsUrl()
    {
        if (isset($_GET['url'])){
            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
        }
        
    }


}