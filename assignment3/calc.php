<?php 
//calculated by user input
$sqftOfWall = $_POST['sqftOfWallSpace'];
$costOfPaint = $_POST['priceOfPaintPerGallon'];

//validations
if(isset($sqftOfWall) && isset($costOfPaint)){
	$numberOfGallonsOfPaint = $wallSpace / 115;
	$reqHoursOfLabor = $numberOfGallonsOfPaint * 8;
	$totCostOfPaintJob = $numberOfGallonsOfPaint * $costOfPaint;
	$totLaborCharges = $reqHoursOfLabor * 20;
	$totCostOfPaintJob = $totCostOfPaintJob + $totLaborCharges;

}else{
	echo "Please enter valid values";
}

	echo "The number of gallons of paint required: " . $numberOfGallonsOfPaint . "<br>";
	echo "The hours of labor required: " . $numberOfGallonsOfPaint . "<br>";
	echo "The cost of the paint: " . $numberOfGallonsOfPaint . "<br>";
	echo "The labor charges: " . $numberOfGallonsOfPaint . "<br>";
	echo "The total cost of the paint job: " . $numberOfGallonsOfPaint . "<br>";

?>