
import language_check
import sys



userInput=sys.argv[1];
ans = "bood";

tool = language_check.LanguageTool('en_US')
text = ans
matches = tool.check(userInput)


for a in matches:

    if(a.msg == "Possible spelling mistake found" ):


        print(a.replacements)

        break
