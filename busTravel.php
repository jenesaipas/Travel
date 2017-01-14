<!DOCTYPE html>
<!--	Author: Susan Nagy
		Date:	11/21/14
		File:	busTravel.php
		Purpose: Calling arguments/functions/variables from incTravelAllowance.php in if/else statements.

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body>
	<?php

		/* Just added the variable/argument in parenthesis so it gets called from incTravelAllowance.php */
		include ("incTravelAllowances.php");
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];

		$carUse = $miles * 0.35;
		
		if ($breakfast == "YES")
			$breakfastAllowance = getBreakfastAllowance($breakfast);
		else
			$breakfastAllowance = 0.0;
		if ($lunch == "YES")
			$lunchAllowance = getLunchAllowance($lunch);
		else
			$lunchAllowance = 0.0;
		if ($dinner == "YES")
			$dinnerAllowance = getDinnerAllowance($dinner);
		else
			$dinnerAllowance = 0.0;
		if ($hotel == "YES")
			$hotelAllowance = getHotelAllowance($hotel);
		else
			$hotelAllowance = 0.0;

		$total = $carUse + $breakfastAllowance + $lunchAllowance + $dinnerAllowance + $hotelAllowance ;
			
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT FORM</h1>");
		print ("<table border =\"1\"><tr><td>CAR USE:</td><td>$".number_format($carUse,2)."</td</tr>
			<tr><td>BREAKFAST ALLOWANCE:</td><td>$".number_format($breakfastAllowance,2)."</td</tr>
			<tr><td>LUNCH ALLOWANCE:</td><td>$".number_format($lunchAllowance,2)."</td</tr>
			<tr><td>DINNER ALLOWANCE:</td><td>$".number_format($dinnerAllowance,2)."</td</tr>
			<tr><td>HOTEL ALLOWANCE:</td><td>$".number_format($hotelAllowance,2)."</td</tr>
			<tr><td><strong>TOTAL REIMBURSEMENT:</strong></td><td><strong>$".number_format($total,2)."</strong></td</tr></table>");
	?>

</body>
</html>
