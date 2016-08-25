import sys
import language_check
import json
tool = language_check.LanguageTool('en_US')
txt=''
for a in sys.argv[1:]:
    txt=txt+' '+a;


#a='i rea boo'
tool = language_check.LanguageTool('en_US')
#text = ans
#text = a
matches = tool.check(txt)


text='';
#print(matches)
# print(matches[0].msg)
if len(matches) == 0:
    print("no error")



else:

   # for a in matches:
   #print(matches)
   for  a in matches:
       print(a.msg)
       print(a.replacements)

       # print(matches[1])
      #  print(matches[0].msg)
        #text = language_check.correct(text, matches)
       # print(text)





