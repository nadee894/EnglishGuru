import sys
import language_check
import json
import spellCheckLibrary
tool = language_check.LanguageTool('en_US')

def checkspell():
    txt = " ".join(sys.argv[1:])

    # a='i rea boo'
    #tool = language_check.LanguageTool('en_US')

    matches = spellCheckLibrary.check(txt)

    if len(matches) == 0:
        print("no error")

    else:
        for a in matches:
            print(a.msg)
            print(a.replacements)


if __name__ == '__main__':
    checkspell()
