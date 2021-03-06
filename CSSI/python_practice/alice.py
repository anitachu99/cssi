#! /usr/bin/python
#
# A program to analyze the text of Alice in Wonderland and do
# interesting things with the data.

word_count = {} #all the functions could access (why it is out of the loop)
def GetUniqueWords(text):
  words = text.split()
  word_count = {}
    for word in words:
      if word in word_count:
        word_count[word] += 1
      else:
        word_count[word] = 1
#    print "Number of times Alice occurs: " +str(word_count['Alice'])
#    print "Number of times Wonderland occurs: " +str(word_count['Wonderland'])
    return len (word_count)
 #return len(set(text.split()))
def mostFrequent():
    sorted_words = sorted(word_count, key=word_count.get, reversed=True)
    i = 0
    while i < 10:
        word = sorted_words[i]
        print word + '': '' + str(word_count[word])
        i += 1
def moreThan100():
    for word in word_count:
        if word_count[word] >= 100:
            print word  + " : " + str(word_count[word])   
    
def main():
  # Open the file, read it into memory as a single string.
  with open('alice_in_wonderland.txt') as alice_file:
    alice_text = alice_file.read()

  print 'Unique words:', GetUniqueWords(alice_text)
  mostFrequent()
  moreThan100()


if __name__ == '__main__':
  main()
