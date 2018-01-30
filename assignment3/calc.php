<?php 
//calculated by user input
$sqftOfWall = $_POST['sqftOfWallSpace'];
$costOfPaint = $_POST['priceOfPaintPerGallon'];

//calculations to be done
$reqHoursOfLabor;
$totLaborCharges;
$totCostOfPaintJob;

if(is_numeric($sqftOfWall) && is_numeric($costOfPaint)){
	$numberOfGallonsOfPaint = $wallSpace / 115;
	$reqHoursOfLabor = $numberOfGallonsOfPaint * 8;
	$totCostOfPaintJob = $numberOfGallonsOfPaint * $costOfPaint;
	$totLaborCharges = $reqHoursOfLabor * 20;
	$totCostOfPaintJob = $totCostOfPaintJob + $totLaborCharges;

}

?>