# -*- coding: utf-8 -*-
from config import tasks

if __name__ == "__main__":
    print """
    Welcome to Phalcon-Fresh.
    Below are the commands
    """

    commands = tasks.display_commands()
    for cmd in commands:
        print "\t" + cmd

    print "\n"
