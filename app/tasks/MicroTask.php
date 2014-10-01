<?php

class MicroTask

Task extends AbstractTask
{
    protected $type = 'micro';

    public function mainAction()
    {
        $this->displayCommands();
    }

    public function createAction($params = null)
    {
        echo "Not Ready..\n";
    }

}