<?php

class IndexController extends Phalcon\Mvc\Controller;
{

    public function indexAction()
    {
        var_dump($this->app->request(array(
            'controller' => 'example',
            'action' => 'index'
        )));
    }

}
