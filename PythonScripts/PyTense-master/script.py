#! /usr/bin/env python
import sys
import functionsTence
import  test2

#import classes
def corerct_tense_grammar(fixed_text, s, v, o):
    functionsTence.present_simple(s, v, o);
    functionsTence.past_simple(s, v, o)

    functionsTence.past_continuous(s, v, o)
    functionsTence.future_continuous(s, v, o)

    functionsTence.present_prefect(s, v, o)
    functionsTence.past_prefect(s, v, o)
    functionsTence.future_prefect(s, v, o)

    functionsTence.present_perfect_continuous(s, v, o)
    functionsTence.past_perfect_continuous(s, v, o)
    functionsTence.future_perfect_continuous(s, v, o)


def main():
    original_text = " ".join(sys.argv[1:])
    if len(original_text) > 600:
        print("You can't check more than 600 characters at a time.")
        quit()
    else:
        fixed_text = original_text
        spell_text=test2.correct_spelling_mistakes(fixed_text);
        s,v,o=classes.tence_checker(spell_text)
        corerct_tense_grammar(fixed_text,s,v,o)


    #example
    s = "he" # raw_input("Subject: ")
    v = "write" # raw_input("Base verb: ")
    o = "script" # raw_input("Object: ")

    print ("present simple:", functionsTence.present_simple(s, v, o));
    print ("past simple:", functionsTence.past_simple(s, v, o))
    print ("future simple:", functionsTence.future_simple(s, v, o))

    print ("present continuous:", functionsTence.present_continuous(s, v, o))
    print ("past continuous:", functionsTence.past_continuous(s, v, o))
    print ("future continuous:", functionsTence.future_continuous(s, v, o))

    print ("present prefect:", functionsTence.present_prefect(s, v, o))
    print ("past prefect:", functionsTence.past_prefect(s, v, o))
    print ("future prefect:", functionsTence.future_prefect(s, v, o))

    print ("present perfect continuous:", functionsTence.present_perfect_continuous(s, v, o))
    print ("past perfect continuous:", functionsTence.past_perfect_continuous(s, v, o))
    print ("future perfect continuous:", functionsTence.future_perfect_continuous(s, v, o))

    #sentense = functions.SimplePast(s, v, o)





if __name__ == '__main__':
    main()
