<?php
$config = new Phalcon\Config([
    "version" => "1.0.0",

    // This is the output folder, you would change this
    // to your actual applications source folder, eg: /apps
    "app_path" => APP_PATH . "/../tests/",

    // These items to build for a given task
    "tasks" => [

        // This folder must match with /tasks/<Name>Task.php
        "multi" => [
            "folders" => [
                "controllers",
                "models",
                "views",
                "plugins"
            ],
            "files" => "Module.php"
        ],
    ],

    // This is what is displayed if nothing processes
    "command_list" => [
        "multi create <app_name>",
        "sample create <app_name>"
    ]
]);