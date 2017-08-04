##print range(10)##
##print range(100)##
##print range(100, 0)##
##print range(100, 1, 1)##
##print range(100, 1, -1)##
##print range(0, 10)##

some_numbers =[2, 52, 19, 46, 1000]
empty_list = []
for x in [2, 52, 19, 46, 1000]:
    print (x + 10)/2

presidents = ["George Washington", "John Adams", "Thomas Jefferson",
              "James Madison", "James Monroe", "John Quincy Adams"]
for president in presidents:
    reversedpresident= " "
    for letter in president:
        reversedpresident = letter + reversedpresident
    print reversedpresidents
#another way in mini lab
#for Name in presidents:
   #Name = Name [::-1]
   #print Name
 #or..
 #print "".joinreversed()

bottles = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
for bottle in bottles:
    print str(bottle) + " bottles of milk on the wall"

#bonus question for LOOP
#matrix
# a=[[1, 2, 3, 3];[4, 5, 6, 6];[7, 8, 9, 9]]
# a[0][1]
