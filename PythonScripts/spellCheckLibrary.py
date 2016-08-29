import  sys

import os
import re
import socket
import sys

import re
from collections import Counter
import threading
import urllib.parse
import urllib.request
from collections import OrderedDict
from functools import total_ordering
from glob import glob
from weakref import WeakValueDictionary

try:
    from xml.etree import cElementTree as ElementTree
except ImportError:
    from xml.etree import ElementTree



def correct(text: str, matches: []) -> str:
    """Automatically apply suggestions to the text."""
    ltext = list(text)
    matches = [match for match in matches if match.replacements]
    errors = [ltext[match.offset:match.offset + match.errorlength]
              for match in matches]
    correct_offset = 0
    for n, match in enumerate(matches):
        frompos, topos = (correct_offset + match.offset,
                          correct_offset + match.offset + match.errorlength)
        if ltext[frompos:topos] != errors[n]:
            continue
        repl = match.replacements[0]
        ltext[frompos:topos] = list(repl)
        correct_offset += len(repl) - len(errors[n])
    return ''.join(ltext)


def get_directory():
    """Get LanguageTool directory."""
    try:
        language_check_dir = cache['language_check_dir']
    except KeyError:
        def version_key(string):
            return [int(e) if e.isdigit() else e
                    for e in re.split(r"(\d+)", string)]

        def get_lt_dir(base_dir):
            paths = [
                path for path in
                glob(os.path.join(base_dir, 'LanguageTool*'))
                if os.path.isdir(path)
                ]
            return max(paths, key=version_key) if paths else None

        base_dir = os.path.dirname(sys.argv[0])
        language_check_dir = get_lt_dir(base_dir)
        if not language_check_dir:
            try:
                base_dir = os.path.dirname(os.path.abspath(__file__))
            except NameError:
                pass
            else:
                language_check_dir = get_lt_dir(base_dir)
            if not language_check_dir:
                raise PathError("can't find LanguageTool directory in {!r}"
                                .format(base_dir))
        cache['language_check_dir'] = language_check_dir
    return language_check_dir

cache = {}


def words(text): return re.findall(r'\w+', text.lower())



WORDS = Counter(words(open('big.txt').read()))
def P(word, N=sum(WORDS.values())):
    "Probability of `word`."
    return WORDS[word] / N


def correction(word):
    "Most probable spelling correction for word."
    return max(candidates(word), key=P)


def candidates(word):
    "Generate possible spelling corrections for word."
    return (known([word]) or known(edits1(word)) or known(edits2(word)) or [word])


def known(words):
    "The subset of `words` that appear in the dictionary of WORDS."
    return set(w for w in words if w in WORDS)


def edits1(word):
    "All edits that are one edit away from `word`."
    letters = 'abcdefghijklmnopqrstuvwxyz'
    splits = [(word[:i], word[i:]) for i in range(len(word) + 1)]
    deletes = [L + R[1:] for L, R in splits if R]
    transposes = [L + R[1] + R[0] + R[2:] for L, R in splits if len(R) > 1]
    replaces = [L + c + R[1:] for L, R in splits if R for c in letters]
    inserts = [L + c + R for L, R in splits for c in letters]
    return set(deletes + transposes + replaces + inserts)


def edits2(word):
    "All edits that are two edits away from `word`."
class Error(Exception):

    """LanguageTool Error."""


class ServerError(Error):
    pass


class JavaError(Error):
    pass


class PathError(Error):
    pass

def check(txt):
    word=edits1(txt)
    correction(word)
    candidates(correction)

