#! /usr/bin/env python

import functionsTence
#import classes

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

#sentense.print_all()

