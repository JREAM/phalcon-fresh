<?php

class HmvcTask extends AbstractTask
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