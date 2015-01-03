# -*- coding: utf-8 -*-
import os

# --------------------------------------------------------------
# This is the output folder, you would change this
# to your actual applications source folder, eg: /apps
# --------------------------------------------------------------

CONFIG_PATH = os.path.dirname(__file__)
BASE_PATH = os.path.abspath(os.path.join(CONFIG_PATH, '..'))
SAVE_PATH = os.path.join(BASE_PATH, 'output')
TEMPLATE_PATH = os.path.join(BASE_PATH, 'template')
