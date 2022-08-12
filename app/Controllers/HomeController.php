<?php

class HomeController
{
    public $var1 = "Hello OOP"; 
    private $var2 = "Hllo private"; 
    protected $var3 = "Hello protected";
    
    public function __construct()
    {
        // render('/home/index');
    }

    public function index()
    {
        render('/home/index');
    } 
}

