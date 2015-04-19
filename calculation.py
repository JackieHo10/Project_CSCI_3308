#This file uses to get queries from the users and calculate the calories
from nltk import tokenize

class calculation:
	
	global dictfood
	# We use dictionary for now since we still figure out how to use API, we will change it later
	dictfood = {'chickendrumstick':53.5,'egg':1.44,'milk':0.54} 
	global total
	total = 0

	#This function uses to check if food in our record or not
	def findFood(self,name):
		name = name.lower()
		return dictfood.has_key(name)
		
	#This function uses to calculate the calories fron the users' queries
	def calculateCal(self,string):
		global total
		total = 0
		string = string.upper()
		lis = tokenize.sent_tokenize(string)
		for string1 in lis:
			food, qual = string1.split()
			food = food.lower()
			qual = float(qual[:-1])
			if (dictfood.has_key(food)):
				cal = dictfood[food]
			else:
				cal = 0
			total = total + cal*qual
		return total
