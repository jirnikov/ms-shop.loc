<?php 

namespace app\controllers;

use app\models\Main;
use jdv\App;
use jdv\Controller;
use RedBeanPHP\R;

/** @property Main $model */

class MainController extends AppController
{
    public function indexAction()
    {
        $lang = App::$app->getProperty('language');

       $slides = R::findAll('slider');

       $products = $this->model->get_hits( $lang, 6);

       $this->set(compact('slides', 'products'));

       $this->setMeta('Главная станица');
       
    }
}