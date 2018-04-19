import argparse
import gzip
import os
import shutil
import sys
import threading

def parse_input():
    parser = argparse.ArgumentParser()
    parser.add_argument('-target', nargs=1, required=True,
                        help='Target Backup folder')
    parser.add_argument('-source', nargs='+', required=True,
                        help='Source Files to be added')
    parser.add_argument('-compress', nargs=1,  type=int,
                        help='Gzip threshold in bytes', default=[100000])

    # no input means show me the help
    if len(sys.argv) == 1:
        parser.print_help()
        sys.exit()

    return parser.parse_args()


def size_if_newer(source, target):
    """ If newer it returns size, otherwise it returns False """

    src_stat = os.stat(source)
    try:
        target_ts = os.stat(target).st_mtime
    except FileNotFoundError: