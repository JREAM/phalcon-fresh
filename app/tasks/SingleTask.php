<?php

class SingleTask extends AbstractTask
{
    protected $type = 'single';

    public function mainAction()
    {
        $this->displayCommands();
    }

    public function createAction($params = null)
    {
        echo "Not Ready..\n";
    }

}