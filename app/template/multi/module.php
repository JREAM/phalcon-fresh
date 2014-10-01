<?php

namespace %namespace%;

class Module
{

    public function registerAutoloaders()
    {

        $loader = new \Phalcon\Loader();

        $loader->registerNamespaces(array(
            '%namespace%\Controllers' => '../apps/%app%/controllers/',
            '%namespace%\Models' => '../apps/%app%/models/',
            '%namespace%\Plugins' => '../apps/%app%/plugins/',
        ));

        $loader->register();
    }

    /**
     * Register the services here to make them general or register in the ModuleDefinition to make them module-specific
     */
    public function registerServices($di)
    {

        //Registering a dispatcher
        $di->set('dispatcher', function() {

            $dispatcher = new \Phalcon\Mvc\Dispatcher();

            //Attach a event listener to the dispatcher
            $eventManager = new \Phalcon\Events\Manager();
            // $eventManager->attach('dispatch', new \Acl('backend'));

            $dispatcher->setEventsManager($eventManager);
            $dispatcher->setDefaultNamespace("%namespace%\Controllers\\");
            return $dispatcher;
        });

        //Registering the view component
        $di->set('view', function() {
            $view = new \Phalcon\Mvc\View();
            $view->setViewsDir('../apps/%app%/views/');
            return $view;
        });

    }

}