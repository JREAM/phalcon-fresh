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
                "{% app %}/controllers",
                "{% app %}/models",
                "{% app %}/views",
                "{% app %}/plugins"
            ],
            "files" => [
                "{% app %}/Module.php",
                "public/index.php",
                ".htaccess"
            ]
        ],
        "micro" => [
            "folders" => [
                "controllers",
                "public"
            ],
            "files" => [
                "public/index.html",
                ".htaccess"
            ]
        ],
        "hmvc" => [
            "folders" => [
                "controllers",
                "public"
            ],
            "files" => [
                "public/index.html",
                ".htaccess"
            ]
        ],
        "single" => [
            "folders" => [
                "controllers",
                "models",
                "views",
                "public"
            ],
            "files" => [
                "public/index.html",
                ".htaccess"
            ]
        ]
    ],

    // This is what is displayed if nothing processes
    "command_list" => [
        "hmvc create <app_name>",
        "micro create <app_name> (Primary In Dev)",
        "multi create <app_name>",
        "single create <app_name>",
    ]
]);