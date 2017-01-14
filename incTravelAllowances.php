<!--Author:	 Susan Nagy
	Date:	 11/21/14
	File:	 incTravelAllowances.php
	Purpose: Declaring functions for busTravel.php


-->

<?php
		/* These functions are getting called from busTravel.php. They let the code know how much each variable is if they variables are "YES". */

		function getMileageAllowance($miles) 
	{
			return $carUse * 0.35;
	}

		function getBreakfastAllowance($breakfast) 
	{
			return $breakfast = 6.00;		
	}

		function getLunchAllowance($lunch) 
	{
			return $lunch = 8.50;
	}

		function getDinnerAllowance($dinner) 
	{
			
			return $dinner = 17.50;
	}

		function getHotelAllowance($hotel) 
	{
			return $hotel = 110.00;
	}

		

?>
