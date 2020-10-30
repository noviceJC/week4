<?php

	$full_name = strtoupper("". $_POST["first"] ." ". $_POST["last"] ."");

	list($street_number, $street_name) = explode(" ", $_POST["address"], 2);

	$phone_number = "(". substr($_POST["phone"], 0, 3) .") ". substr($_POST["phone"], 3, 3) ."-". substr($_POST["phone"], 6, 4) . "";

	$date = date_format(date('Y-m-d', strtotime($_POST["dob"])), "F d, Y");


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

echo '<p>' . $full_name . '</p>';
echo '<p>' . $street_number . '</p>';
echo '<p>' . $street_name . '</p>';
echo '<p>' . $phone_number . '</p>';
echo '<p>' . $date . '</p>';

echo '</body>';

echo '</html>';
?>