import sys
import language_check

ans = sys.argv["lik"];
tool = language_check.LanguageTool('en-US')
text = ans
matches = tool.check(text)



for a in matches:
    if(a.msg == "Possible spelling mistake found" ):
        print("spell error")
        break
    
   
