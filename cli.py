# -*- coding: utf-8 -*-
import sys


def test():
    print """ Run all tests"""


if len(sys.argv) > 1:
    if sys.argv[1] == "test":
        test()


if __name__ == "__main__":
    print """
    Welcome This
    is a test
    """
