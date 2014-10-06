<?php

class HelpTask extends AbstractTask
{
    protected $classification = 'help';

    /**
    * Displays a list of commands if nothing is passed
    *
    * @return void
    */
    public function mainAction($params = null)
    {
        echo "This will display Help..." . PHP_EOL;
    }
}

// End of File
// --------------------------------------------------------------