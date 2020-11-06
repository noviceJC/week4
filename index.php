<?php
echo '<!DOCTYPE html>';
/*****************************************************************************
Title:  
Use:  
Author:  
School:  Southern Illinois University
Term:
Developed:  
Tested:  
******************************************************************************/

echo '<html lang="en-US">';

echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<title>Page Title</title>';
	echo '<link rel="stylesheet" href="main.css">';
echo '</head>';

echo '<body>';

echo 
	'<form action="response_page.php" method="post">
		<label for="first">First Name</label>
		<input type="text" name="first">
		<br><br>

		<label for="last">Last Name</label>
		<input type="text" name="last">
		<br><br>

		<label for="address">Street Address</label>
		<input type="text" name="address">
		<br><br>

		<label for="city">City</label>
		<input type="text" name="city">
		<br><br>

		<label for="state">State</label>
		<input type="text" name="state">
		<br><br>

		<label for="zip">Zip Code</label>
		<input type="text" name="zip">
		<br><br>

		<label for="phone">Phone Number</label>
		<input type="number" name="phone">
		<br><br>

		<label for="dob">BirthDate</label>
		<input type="date" name="dob">
		<br><br>

		<label for="userid">Create a User ID</label>
		<input type="text" name="userid">
		<br><br>

		<label for="randomnum">Select a Random Number from 1 to 10</label>
		<input type="number" name="randomnum">
		<br><br>

		<label for="savings">How much money is currently in your savings?</label>
		<input type="number" name="savings">
		<br><br>

		<label for="monthlysavings">How much money do you save each month?</label>
		<input type="number" name="monthlysavings">
		<br><br>

		<label for="goal">
			What is your savings goal?  What is the total amount you want to save?  
		</label>
		<input type="number" name="goal">
		<br><br>

		<input type="submit">
	</form>';

echo '</body>';

echo '</html>';
?>