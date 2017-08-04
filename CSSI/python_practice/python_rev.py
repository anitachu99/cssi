#fizzbuzz
#takes in a number n.
#starting from 0 to n ,
#print out each number in sequence
#but if the number is divisible by 3, print "Fizz"
#if divisble by 5, print "buzz"
#if divisble by both, print "Fizz Buzz"
#import math # dont really need it
def fizzBuzz(n):
    for i in range(0, n+1): #creates a list of number but does not include n
        if i % 3 == 0 and i % 5 == 0:
            print "FizzBuzz"
        elif i % 3 == 0:
            print "Fizz"
        elif i % 5 == 0:
            print "Buzz"
        else:
            print i
def fizzBuzzLoop():
    while True :
        n = int(raw_input("Pick a number "))
        fixxBuzz(n)
        response = raw_input("Quit? ")
        if response == "Quit":
            break
    print "GoodBye"
fizzBuzzLoop()


#fizzBuzz(n)
