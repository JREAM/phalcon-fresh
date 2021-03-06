<?php

class MainTask extends AbstractTask
{
    protected $classification = 'main';

    /**
    * Displays a list of commands if nothing is passed
    *
    * @return void
    */
    public function mainAction($params = null)
    {
        $this->displayCommands();
    }
}

// End of File
// --------------------------------------------------------------