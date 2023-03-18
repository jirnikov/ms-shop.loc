<?php 

namespace app\controllers;

use jdv\Controller;

class MainController extends Controller 
{
    public function indexAction()
    {
      
       $this->setMeta('<h1>Главная страница', 'description', 'key', 'H1 страница', 'Главная');
       $this->set(['test' => 'Test var']);
    }
}