# -*- coding: utf-8 -*-
import os
from config import settings


class TestConfig(object):

    def test_configpath(self):
        """ Does the base path exist?
        """
        assert os.path.exists(settings.CONFIG_PATH), settings.CONFIG_PATH

    def test_basepath(self):
        """ Does the base path exist?
        """
        assert os.path.exists(settings.BASE_PATH), settings.BASE_PATH

    def test_savepath(self):
        """ Does the save path exist?
        """
        assert os.path.exists(settings.SAVE_PATH), settings.SAVE_PATH

    def test_templatepath(self):
        """ Does the template path exist?
        """
        assert os.path.exists(settings.TEMPLATE_PATH), settings.TEMPLATE_PATH
