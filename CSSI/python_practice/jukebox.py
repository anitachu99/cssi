songs = ['thinking bout you', 'dna', 'faithful', 'rosa parks', 'boredom', 'closer', 'garden shed', 'i can', 'return of the mack', 'no effort', 'heebiejeebies', 'heartless']
def list_songs(songs):
            print songs

def play_songs(songs):
        playquest = raw_input('What song do you want to play?')
        return playquest
            i = 0
            while i < len(songs):
        if playquest == songs[i]:
            print(songs[i] + ' is playing')
        else:
            return "That song isn't available, try another one"
            play_songs()

def search_songs(songs):
        searchquest = raw_input('What are you searching for?')
        #return searchquest #possibly change to print
        while i < len(songs):
           if searchquest == songs[i]:
               print(songs[i] + ' is available')
               return request

def exit_songs(songs):
    if request == 'Quit':
        return 'Goodbye!'

def jukejuke(songs):
    request = raw_input('List. Play. Search. Quit')
    if request  == 'List':
        list_songs()
    if request == 'Quit':
        exit_songs()
    if request == 'Play':
        play_songs()
    if request == 'Search':
        search_songs()

# list_songs(songs)
# search_songs(songs)
# play_songs(songs)
# exit_songs(songs)
