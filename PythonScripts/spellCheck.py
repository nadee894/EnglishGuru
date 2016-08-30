import sys
import language_check
import json

tool = language_check.LanguageTool('en_US')



def checkspell():
    txt = " ".join(sys.argv[1:])


    #a='i rea boo'
    tool = language_check.LanguageTool('en_US')

    matches = tool.check(txt)



    if len(matches) != 0:

        for a in matches:
            if(a.msg!="This sentence does not start with an uppercase letter"):
                print(a.msg)
                print(a.replacements)





if __name__ == '__main__':
    checkspell()
