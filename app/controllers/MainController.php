<?php 

namespace app\controllers;

use app\models\Main;
use jdv\Controller;
use RedBeanPHP\R;

/** @property Main $model */

class MainController extends AppController
{
    public function indexAction()
    {
       $slides = R::findAll('slider');
       $this->set(compact('slides'));
       
    }
}