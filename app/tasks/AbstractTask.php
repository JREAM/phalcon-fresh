<?php

/**
 * This isn't to be used as a CLI method, it's to repeat code.
 */
class AbstractTask extends \Phalcon\CLI\Task
{
    /**
     * @var Object
     * Shared Dependency Injector for Subclass Usage
     */
    protected $di;

    /**
     * Get the Default DI
     *
     * @return void
     */
    public function __construct()
    {
        $this->di = \Phalcon\DI\FactoryDefault::getDefault();
    }

    /**
     * Display Commands when an impromper call was made
     *
     * @param  mixed $params
     *
     * @return void
     */
    public function displayCommands($params = null)
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