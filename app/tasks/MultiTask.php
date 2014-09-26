<?php

class MultiTask extends AbstractTask
{

    public function mainAction()
    {
        $this->displayCommands();
    }

    public function createAction($params = null)
    {
        if (!is_array($params)) {
            echo "Error: Please provide an app name in your command.\n";
            exit;
        }

        echo "Creating the Stuff..\n";
    }

}