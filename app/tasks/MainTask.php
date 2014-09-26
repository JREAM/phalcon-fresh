<?php

class MainTask extends \Phalcon\CLI\Task
{
    /**
    * Displays a list of commands if nothing is passed
    *
    * @return void
    */
    public function mainAction($params = null)
    {
        // Returns a welcome message with the version
        $config = $this->getDI()->get('config');
        echo "___________________________\n";
        echo "\nRunning Phalcon Fresh {$config->version}\n";
        echo "___________________________\n";

        // Display Command List if nothing is passed
        if (!is_array($params))
        {
            echo "\nYou can run the following commands:\n\n";
            foreach ($config->command_list as $cmd)
            {
                echo "   $ $cmd \n";
            }
            echo "\n";
            exit;
        }

    }
}