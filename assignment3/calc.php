<?php 
//calculated by user input
$sqftOfWall = $_POST['sqftOfWallSpace'];
$costOfPaint = $_POST['priceOfPaintPerGallon'];


//validations
if(is_numeric($sqftOfWall) && is_numeric($costOfPaint)){
	$numberOfGallonsOfPaint = $wallSpace / 115;
	$reqHoursOfLabor = $numberOfGallonsOfPaint * 8;
	$totCostOfPaintJob = $numberOfGallonsOfPaint * $costOfPaint;
	$totLaborCharges = $reqHoursOfLabor * 20;
	$totCostOfPaintJob = $totCostOfPaintJob + $totLaborCharges;

	echo "The number of gallons of paint required: " . $numberOfGallonsOfPaint;
	echo "The hours of labor required: " . $numberOfGallonsOfPaint;
	echo "The cost of the paint: " . $numberOfGallonsOfPaint;
	echo "The labor charges: " . $numberOfGallonsOfPaint;
	echo "The total cost of the paint job: " . $numberOfGallonsOfPaint;

}

?>