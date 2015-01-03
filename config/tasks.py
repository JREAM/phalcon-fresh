# -*- coding: utf-8 -*-

# --------------------------------------------------------------
# This is the default command list
# --------------------------------------------------------------
COMMANDS = {
    'controller': {},
    'model': {},
    'view': {},
    'mvc': {}
}


def display_commands():
    """ Returns the main keys for the commands
    """
    output = []
    for cmd, section in enumerate(COMMANDS):
        output.append(section)

    return output

# --------------------------------------------------------------
# These items to build for a given task
# --------------------------------------------------------------
tasks = {
}
