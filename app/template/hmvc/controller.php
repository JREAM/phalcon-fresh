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

{% newfile:example %}
<?php

use Phalcon\Http\Response;

class SayController extends Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        return new Response('Index Action');
    }

}