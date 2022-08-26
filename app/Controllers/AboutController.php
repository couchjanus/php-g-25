<?php
namespace Controllers;
use Core\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $this->response->render('about/index');
    } 
}
