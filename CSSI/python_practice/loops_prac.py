presidents = ["George Washington", "John Adams", "Thomas Jefferson",
              "James Madison", "James Monroe", "John Quincy Adams]
reversed_presidents = []
for president in presidents:
    name = ""
    for letter in range(len(president)-1,-1,-1):
        name.append(president[letter])
    reversed_presidents.append(name)

print reversed_presidents
