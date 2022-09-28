<?php
function calculateDOB($DOB) {		
	$todayDate = date_create(date('Y-m-d'));		
	$DOB = date_create($DOB);		
	$dateDiff = date_diff($todayDate, $DOB)->format('%Y-%m-%d');		
	$dateArray = explode('-', $dateDiff);	
	$year = $dateArray[0];		
	$month = $dateArray[1];			
	$day = $dateArray[2];			
		return [$year, $month, $day];	
	}
?>