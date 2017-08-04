import urllib2
import json

response = urllib2.urlopen("https://api.imgflip.com/caption_image")
content = response.read()
