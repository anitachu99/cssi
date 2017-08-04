# class Musician:
#     def __init__(self, name, instrument, song):
#         self.name = name
#         self.instrument = instrument
#         self.song = song
#         self.recording = recording
#
#     def description(self):
#         return "Hey my name is {0}, I play {1}, and my favorite song is {2}".format(self.name, self.instrument, self.song)
#     def is_recording(self):
#         if self_recording:
#             return "woohoo I am recording"
#         else:
#             return "nah maybe later, I'm napping!"
# kanye = Musician('kanye', 'vocals', 'famous', True)
# chance = Musician('chance', 'rapper', 'no problem', False)
#
# print kanye.name
# print kanye.instrument
# print kanye.song
# print kanye.decription()
# print chance.decription()
# print kanye.is_recording()
# print chance.is_recording()

class Spaceship:
    def __init__(self, astronaut, color, planet):
        self.astronaut = astronaut
        self.color = color
        self.planet = planet
    def Specs(self):
        return "Hy mi name is {0}, i am {1} and i'm currently residing at {2}".format(self.astronaut, self.color, self.planet)
    def launching(self):
        if is_launching:
            return "3...2...1 Blast Off!!!"
        else:
            
Futuredora = Spaceship("future hendrxx", "blue", "URT")
Freelancer = Spaceship("kanye", "red", "Saturn")
print Futuredora.astronaut
print Futuredora.color
print Futuredora.planet
print Freelancer.astronaut
print Freelancer.color
print Freelancer.planet
print Freelancer.Specs()
print Futuredora.Specs()
