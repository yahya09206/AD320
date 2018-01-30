<!DOCTYPE html>
<html>
<head>
	<title>Paint Estimator</title>
</head>
<body>
<h1 align="center"> Paint Cost Estimator </h1>
<div>
    <form>
        <table align="center">
            <tr>
                <td> Amount of wall space in square ft</td>
                <td><input name="sqftOfWallSpace" type="text"/></td>
            </tr>
            <tr>
                <td> Price of paint/gallon</td>
                <td><input name="priceOfPaintPerGallon" type="text"/></td>
            </tr>
            <tr>

                <td colspan="2">
                      <input type="submit"> </td>
            </tr>

        </table>
    </form>

</div>
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

	echo "The number of gallons of paint required: " . $numberOfGallonsOfPaint . "<br/>";
	echo "The hours of labor required: " . $numberOfGallonsOfPaint . "<br/>";
	echo "The cost of the paint: " . $numberOfGallonsOfPaint . "<br/>";
	echo "The labor charges: " . $numberOfGallonsOfPaint . "<br/>";
	echo "The total cost of the paint job: " . $numberOfGallonsOfPaint . "<br/>";
}


?>
</body>
</html>