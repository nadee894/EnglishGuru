import sys
import language_check
import sys

userInput=sys.argv[1];
print(userInput);
tool = language_check.LanguageTool('en_US')




#for a in sys.argv[1:]:
ans ="i is lik the book lk";

tool = language_check.LanguageTool('en_US')
text = ans
matches = tool.check(userInput)

#print(matches)
if len(matches) == 0 :
    print("no error")


else:
    for a in matches:
        print(a)

    

