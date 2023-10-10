<?php
	function getWage($hourlyWage, $hoursWorked){
		if ($hoursWorked <= 40)
			return round(($hourlyWage * $hoursWorked), 2);
		else
			return round((($hourlyWage * 40) +
					($hourlyWage * 1.5 * ($hoursWorked - 40))), 2);
	}

	function getStartingWage(){
		return $startingWage = 8.00;
	}

	function getBonus($wage){
		if ($wage > 200)
			$bonus = 75.00;
		else
			$bonus = 50.00;
		return $bonus;
	}

	function getNewHourlyWage($hourlyWage, $percentIncrease){
		$newHourlyWage = round(($hourlyWage + $hourlyWage * $percentIncrease), 2);
		return $newHourlyWage;
	}
 
	function setMinimumWage($hourlyWage){
		if ($hourlyWage < 8.00)
			return 8.00;
		else
			return $hourlyWage;
	}

	function getOvertimeHours($hoursWorked){
		if($hoursWorked <= 40)
			$overtimeHours = 0;
		else
			$overtimeHours = $hoursWorked - 40;
		return $overtimeHours;
	}
?>
