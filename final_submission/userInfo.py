"""@package docstring

"""
from nltk import tokenize


class userInfo:
	""" This class uses to find food in our database or API
		and change users' information in databases
		@param dicfood It use to store information of food in case if we cannot use API
		@param total It use to store the total calories of user
	"""
	global dictfood
	dictfood = {'chickendrumstick':53.5,'egg':1.44,'milk':0.54} 
	global total
	total = 0

	def findFood(self,name):
		"""This method uses to check if the food name in our database or not.
			@param name It is the name of the food from the users.
			@return true if food in databases, false othewise
		"""
		name = name.lower()
		return dictfood.has_key(name)
		
	def calculateCal(self,string):
		"""This method uses to check if the food name in our database or not.
			@param string It is the string name of food from the users.
			@return total calories
		"""
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
