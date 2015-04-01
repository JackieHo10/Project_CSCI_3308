import unittest
import calculation

class TestStringMethods(unittest.TestCase):

  def test_not_in_database(self):
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chicken")) 
	  #function findFood return true if food in database otherwise return false
	  return good
  def test_in_database(self):
	  good = calculation.calculation()
	  self.asserTrue(good.findFood("chicken"))
	  return good
  def test_food_one(self):
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chicken"))
	  return good
  def test_food_two(self):
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chicken"))
	  return good
  def test_food_three(self):
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chicken"))
	  return good

if __name__ == '__main__':
    unittest.main()
