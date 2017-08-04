import urllib2
import json
import urllib2

# response = urllib2.urlopen("https://uinames.com/api/")
# no_more_content = response.read()
# print no_more_contents

response = urllib2.urlopen("https://uinames.com/api/")
content = response.read()
content_dict = json.loads(content)
first_name = content_dict['name']
country = content_dict['region']
print "My name is " + first_name + " and my country is " + country
