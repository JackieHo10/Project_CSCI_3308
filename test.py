import unittest
import calculation

class TestStringMethods(unittest.TestCase):

  def test_not_in_database(self):
	  good = calculation.calculation()
	  self.assertTrue(good.findFood("chicken")) 
	  #function findFood return true if food in database otherwise return false


if __name__ == '__main__':
    unittest.main()
