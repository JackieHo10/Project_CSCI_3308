import unittest
import calculation

class TestStringMethods(unittest.TestCase):

  def test_not_in_database(self):
	  print "\nTest food is in database."
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chickendrumstick")) 
	  #function findFood return true if food in database otherwise return false
	  return good
  def test_in_database(self):
	  print "\nTest food is not in database."
	  good = calculation.calculation()
	  self.assertFalse(good.findFood("pho"))
	  return good
  def test_upper_lower_mix(self):
	  print "\nTest name of food that mixed upper and lower characters."
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("ChickenDrumstick"))
	  return good
  def test_one_food_calculation(self):
	  print "\nTest calogies calculation of one food."
	  good = calculation.calculation()
	  self.assertEqual(good.calculateCal("ChickenDrumstick 2."),107)
	  return good
  def test_two_food_calculation(self):
	  print "\nTest calogies calculation of two food."
	  good = calculation.calculation()
	  self.assertEqual(good.calculateCal("Chickendrumstick 2. Egg 100."),251)
	  return good
  def test_three_food_but_one_not_in_database_calculation(self):
	  print "\nTest calogies calculation of food but one of them not in database"
	  good = calculation.calculation()
	  self.assertEqual(good.calculateCal("Chickendrumstick 2. Egg 100. Pho 2."),251)
	  return good
  def test_none_of_food_in_database_calculation(self):
	  print "\nTest calogies calculation of food but none of them not in database"
	  good = calculation.calculation()
	  self.assertEqual(good.calculateCal("Tomyum 2. Rice 100. Pho 2."),0)
	  return good

if __name__ == '__main__':
    unittest.main()
