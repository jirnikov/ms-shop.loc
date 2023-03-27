<?php

namespace jdv;

abstract class Controller
{
    public array $data = [];
    public array $meta = ['title' => '', 'description' => '', 'keywords' => '', 'h1' => '', 'breadcrumbs' => ''];
    public false|string $layout = '';
    public string $view = '';
    public object $model;

    public function __construct( public $route = [])
    {
        
    }

    public function getModel()
    {
        $model = 'app\models\\' . $this->route['admin_prefix'] . $this->route['controller'];
        
        if (class_exists($model)) {
            $this->model = new $model();
        }
    }

    public function getView()
    {
        $this->view = $this->view ?: $this->route['action'];
        (new View($this->route, $this->layout, $this->view, $this->meta))->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    public function setMeta($title = '', $description = '', $keywords = '', $h1 = '', $breadcrumbs = '')
    {
        $this->meta = [
            'title' => h($title),
            'description' => h($description),
            'keywords' => h($keywords),
            'h1' => h($h1),
            'breadcrumbs' => h($breadcrumbs)
        ];
    }
}
 