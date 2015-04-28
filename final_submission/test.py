import unittest
import userInfo

class TestStringMethods(unittest.TestCase):
  """ This class uses to run the unit test for userInfo class
  """

  def test_in_database(self):
	  """This method uses to test if findFood function can find food in database
	  """
	  print "\nTest food is in database."
	  good = userInfo.userInfo()
	  self.assertTrue(good.findFood("chickendrumstick")) 
	  return good
  def test_not_in_database(self):
	  """This method uses to test if findFood function return false for food not in databases
	  """
	  print "\nTest food is not in database."
	  good = userInfo.userInfo()
	  self.assertFalse(good.findFood("pho"))
	  return good
  def test_upper_lower_mix(self):
	  """This method uses to test if findFood function can find food that are mixed string (lower and upper characters)
	  """
	  print "\nTest name of food that mixed upper and lower characters."
	  good = userInfo.userInfo()
	  self.assertTrue(good.findFood("ChickenDrumstick"))
	  return good
  def test_one_food_calculation(self):
	  """This method uses to test if calculateCal function can return correct calories for one food
	  """
	  print "\nTest calogies calculation of one food."
	  good = userInfo.userInfo()
	  self.assertEqual(good.calculateCal("ChickenDrumstick 2."),107)
	  return good
  def test_two_food_calculation(self):
	  """This method uses to test if calculateCal function can return correct calories for two food
	  """
	  print "\nTest calogies calculation of two food."
	  good = userInfo.userInfo()
	  self.assertEqual(good.calculateCal("Chickendrumstick 2. Egg 100."),251)
	  return good
  def test_three_food_but_one_not_in_database_calculation(self):
	  """This method uses to test if calculateCal function can return correct calories for three food but not in database
	  """
	  print "\nTest calogies calculation of food but one of them not in database"
	  good = userInfo.userInfo()
	  self.assertEqual(good.calculateCal("Chickendrumstick 2. Egg 100. Pho 2."),251)
	  return good
  def test_none_of_food_in_database_calculation(self):
	  """This method uses to test if calculateCal function can return correct calories for all food are not in database
	  """
	  print "\nTest calogies calculation of food but none of them not in database"
	  good = userInfo.userInfo()
	  self.assertEqual(good.calculateCal("Tomyum 2. Rice 100. Pho 2."),0)
	  return good

if __name__ == '__main__':
    unittest.main()
