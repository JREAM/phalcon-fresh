# -*- coding: utf-8 -*-
from config import tasks


class TestTasks(object):

    def test_display_commands(self):
        """ Expecting a list
        """
        result = tasks.display_commands()
        msg = "Expecting list got: %s" % type(result)
        assert isinstance(result, list), msg
