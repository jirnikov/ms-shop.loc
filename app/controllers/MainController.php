<?php 

namespace app\controllers;

use RedBeanPHP\R;
use jdv\Controller;

class MainController extends Controller 
{
    public function indexAction()
    {
       $names = R::findAll('name') ;
       debug($names);
       $this->setMeta('<h1>Главная страница', 'description', 'key', 'H1 страница', 'Главная');
       $this->set(['test' => 'Test var']);
    }
}