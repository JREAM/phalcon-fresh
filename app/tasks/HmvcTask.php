<?php

class HmvcTask extends AbstractTask
{
    protected $type = 'hmvc';

    public function mainAction()
    {
        $this->displayCommands();
    }

    public function createAction($params = null)
    {
        $this->app = strtolower($params[0]);

        $this->createFolders();
        $this->createFiles();

        echo "WIP.. Check Output folder..\n";
    }

}