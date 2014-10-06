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
     * @var Object
     * Config file from the DI
     */
    protected $config;

    /**
     * The Task called for using the correct templates.
     *     Assigned in the Child Class (eg: MultiTask.php)
     * @var string
     */
    protected $classification;

    /**
     * The command that was called
     * @var string
     */
    protected $command;

    // --------------------------------------------------------------

    /**
     * Get the Default DI
     *
     * @return void
     */
    public function __construct()
    {
        $this->di = \Phalcon\DI\FactoryDefault::getDefault();
        $this->config = $this->getDI()->get('config');
    }

    // --------------------------------------------------------------

    public function mainAction() {
        $this->displayCommands();
    }

    // --------------------------------------------------------------

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

        echo "___________________________" . PHP_EOL;
        echo PHP_EOL . "Running Phalcon Fresh {$this->config->version}" . PHP_EOL;
        echo "___________________________" . PHP_EOL;

        // Display Command List if nothing is passed
        if (!is_array($params))
        {
            echo PHP_EOL . "You can run the following commands:" . PHP_EOL . PHP_EOL;

            // List the commands for the user
            foreach ($this->config->command_list as $command_key => $command)
            {
                // Make sure the command has sub-items
                if (count($command))
                {
                    // Loop through each sub command
                    foreach ($command as $option_key => $option)
                    {
                        if ($option === null) {
                            echo "  $ $command_key $option_key <name>" . PHP_EOL;
                        } elseif (!is_scalar($option)) {
                            echo "  $ $command_key $option_key <name> [<name>] [..]" . PHP_EOL;
                        }
                    }
                    echo PHP_EOL;
                }
            }

            echo PHP_EOL;
            exit;
        }
    }

    // --------------------------------------------------------------

    /**
     * Prepares incoming args to build the app type
     *
     * @param  array $params
     *
     * @return object
     */
    protected function prepareArguments($params)
    {
        // For Invalid Calls
        if (empty($params)) {
            $this->displayCommands();
        }

        // Prepare thy data
        $data = new stdClass();

        // Build a structure for the parameteres
        foreach ($params as $param_key => $param) {
            $data->item[$param_key] = $param;
        }

        return $data;
    }

    // --------------------------------------------------------------

    public function appAction($params) {
        echo $this->classification . PHP_EOL;
        $this->command = __FUNCTION__;
        echo $this->command . PHP_EOL;

        print_r($params);
        $data = $this->prepareArguments($params);
        print_r($data);
    }

    // --------------------------------------------------------------

    public function controllerAction($params) {
        echo $this->classification . PHP_EOL;
        $this->command = 'controller';
        echo $this->command . PHP_EOL;

        print_r($params);
        $data = $this->prepareArguments($params);
        print_r($data);
    }

    // --------------------------------------------------------------

    public function modelAction($params) {
        echo $this->classification . PHP_EOL;
        $data = $this->prepareArguments($params);
        print_r($data);
    }

    // --------------------------------------------------------------

    public function viewAction($params) {
        echo $this->classification . PHP_EOL;
        $data = $this->prepareArguments($params);
        print_r($data);
    }

    // --------------------------------------------------------------

    public function mvcAction($params) {
        echo $this->classification . PHP_EOL;
        $data = $this->prepareArguments($params);
        print_r($data);
    }

    // --------------------------------------------------------------

    /**
     * Creates the folders for a template
     *
     * @return void
     */
    public function createFolders()
    {
        $folders = $this->config->tasks->{$this->type}->folders;
        foreach ($folders as $folder)
        {
            $create_folder = $this->config->save_path . $folder;
            if (!is_dir($create_folder)) {
                mkdir($create_folder);
            }

            // if ($result) {
            //     $this->rollBack();
            // }
        }
    }

    // --------------------------------------------------------------

    /**
     * Creates the files for a template
     *
     * @return void
     */
    public function createFiles()
    {
        $files   = $this->config->tasks->{$this->type}->files;

        // Loop through the files specified in the config
        foreach ($files as $file)
        {
            // First check if this is the shared .htaccess file
            if ($file === '.htaccess')
            {
                // @todo This will need to be checked against all folder structures
                // to make sure I have it correct
                $file = APP_PATH . "/template/shared/.htaccess";
                $dest = $this->config->save_path . "/public/.htaccess";
                $result = copy($file, $dest);
                if (!$result) {
                    throw new \Exception("Hmm.. Couldn't Copy");
                }
                continue;
            }

            // Otherwise do the default template parsing
            $this->parseTemplate($file);
        }
    }

    // --------------------------------------------------------------

    /**
     * Opens a template and translates its content
     *
     * @return string
     */
    public function parseTemplate($file)
    {
        $file = APP_PATH . '/template/' . $this->type . '/' . $file;
        if (!file_exists($file)) {
            echo PHP_EOL . "Error: Template file does not exist: {$file}" . PHP_EOL;
            return false;
        }

        if (is_dir($file)) {
            echo PHP_EOL . "Error: Cannot parse a directory: {$file}" . PHP_EOL;
            return false;
        }

        echo "NAME:";
        echo $name;
        $data = file_get_contents($file);
        $data = str_replace(['%app%', '%namespace%'], [$this->app, ucwords($this->app)], $data);

        print_r($data);
    }

    // --------------------------------------------------------------

    /**
     * Removes the created items if there is a failure
     *
     * @param  string
     *
     * @return void
     */
    public function rollBack()
    {
        echo PHP_EOL . "Error: Rolling back." . PHP_EOL;
        $this->type;
        $this->app;
    }

    // --------------------------------------------------------------

}

// End of File
// --------------------------------------------------------------