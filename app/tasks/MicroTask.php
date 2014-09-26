<?php

class MicroTask
Task extends AbstractTask
{

    public function mainAction()
    {
        $this->displayCommands();
    }

    public function createAction($params = null)
    {
        echo "Not Ready..\n";
    }

}