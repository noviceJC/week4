<?php

	$full_name = strtoupper("". $_POST["first"] ." ". $_POST["last"] ."");

	list($street_number, $street_name) = explode(" ", $_POST["address"], 2);

	$phone_number = "(". substr($_POST["phone"], 0, 3) .") ". substr($_POST["phone"], 3, 3) ."-". substr($_POST["phone"], 6, 4) . "";

	$date = date_format(date_create($_POST["dob"]),'F d, Y');

	$validId = true;
	$userId = $_POST["userid"];

	if (strlen($userId) < 8) {
		$validId = false;
	}

	$randomNumber = rand(1, 10);
	$enteredRandomNumber = $_POST["randomnum"];
	$randomNumberMsg = "";
	if ($randomNumber == $enteredRandomNumber) {
		$randomNumberMsg = "Our random number and your random number match!";
	} else {
		$randomNumberMsg = 'Your random number is ' . abs($randomNumber - $enteredRandomNumber) . ' off.';
	}

	$savingsNeeded = $_POST["goal"] - $_POST["savings"];
	
	$lengthTillGoalMonths = $savingsNeeded / $_POST["monthlysavings"];
	$lengthTillGoalYears = 0;
	if ($lengthTillGoalMonths > 12) {
		$lengthTillGoalYears = floor($lengthTillGoalMonths / 12);
		$lengthTillGoalMonths = $lengthTillGoalMonths - ($lengthTillGoalYears * 12);
	}

	$dateOfGoal = date('M d, Y', strtotime('+' . $lengthTillGoalYears . ' years'));
	$dateOfGoal = date('M d, Y', strtotime('+' . $lengthTillGoalMonths . ' months'));

	$currentDateTime = date('Y-m-d H:i:s');

	$currentDate = date('m/d/Y');

	$displayCurrentTime = date('h:i a');

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
	echo '<title>Questionnaire Response Page</title>';
	echo '<link rel="stylesheet" href="main.css">';
echo '</head>';

echo '<body>';

	echo '<h1>Questionnaire Response Page</h1>';

	echo '<p>Full Name: ' . $full_name . '</p>';
	echo '<p>Address: ' . $street_number . '</p>';
	echo '<p>City, State, and Zip: ' . $street_name . '</p>';
	echo '<p>Phone Number: ' . $phone_number . '</p>';
	echo '<p>Birth Date: ' . $date . '</p>';

	if ($validId == false) {
		echo '<p>Invalid User ID</p>';
	} else {
		echo '<p>' . $userId . '</p>';
	}
	echo '<p>' . $randomNumberMsg . '</p>';

	echo '<p>Amount you need to reach your goal: $' . $savingsNeeded . '</p>';
	echo '<p>Length of time to reach your goal: ' . $lengthTillGoalYears . ' Years ' . $lengthTillGoalMonths . ' Months</p>';
	echo '<p>Approximate date to reach your goal: ' . $dateOfGoal . '</p>';
	echo '<p>Current Timestamp: ' . $currentDateTime . '</p>';
	echo '<p>Current Date: ' . $currentDate . '</p>';
	echo '<p>Current Time: ' . $displayCurrentTime . '</p>';

echo '</body>';

echo '</html>';
?>