# -*- coding: utf-8 -*-

# --------------------------------------------------------------
# This is what is displayed if nothing processes
# --------------------------------------------------------------
command_list = {
    'hmvc': {
        'app': []
    },
    'micro': {
        'app': null
    },
    'multi': {
        'app': None,
        'controller': [],
        'model': [],
        'view': [],
        'mvc': []
    }
}

# --------------------------------------------------------------
# This is the output folder, you would change this
# to your actual applications source folder, eg: /apps
# --------------------------------------------------------------
save_path = APP_PATH . "/../output/",

# --------------------------------------------------------------
# These items to build for a given task
# --------------------------------------------------------------
tasks = {
    # This folder must match with /tasks/<Name>Task.php
    "multi": {
        "folders": [
            "%app%/controllers",
            "%app%/models",
            "%app%/views",
            "%app%/plugins"
        ],
        "files": [
            "{% app %}/Module.php",
            "public/index.php",
            ".htaccess"
        ]
    },
    "micro": {
        "folders": [
            "controllers",
            "public"
        ],
        "files": [
            "public/index.php",
            ".htaccess"
        ]
    },
    "hmvc": {
        "folders": [
            "controllers",
            "public"
        ],
        "files": [
            "public/index.php",
            ".htaccess"
        ]
    },
    "single": {
        "folders": [
            "controllers",
            "models",
            "views",
            "public"
        ],
        "files": [
            "public/index.php",
            ".htaccess"
        ]
    }
}
