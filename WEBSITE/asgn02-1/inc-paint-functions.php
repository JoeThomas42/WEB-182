<?php
	function getWallArea ($roomLength, $roomWidth, $roomHeight){
		return $roomLength * $roomHeight * 2 + $roomWidth * $roomHeight * 2;
	}

	function getCeilingArea ($roomLength, $roomWidth){
		return $roomLength * $roomWidth;
	}

	function getTotalArea ($wallArea, $ceilingArea){
		return $wallArea + $ceilingArea;;
	}

	function getPaintCost ($totalArea, $paint){
		if ($paint == "Premium")
			$paintCost = ceil($totalArea / 200) * 20.00;
		else
			$paintCost = ceil($totalArea / 200) * 15.00;
		return $paintCost;
	}

	function getLaborCost ($totalArea){
		return ($totalArea / 100) * 25.00;
	}
?>
