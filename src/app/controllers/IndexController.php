<?php

use Phalcon\Mvc\Controller;


class IndexController extends Controller
{
    public function indexAction()
    {
       
        // return '<h1>Hello World!</h1>';
    }
    public function DateAction() {
        $value = new \App\Components\Helperclass();
        echo $value->datetime();
        // die;
    }
}