<?php
/**
 * Created by PhpStorm.
 * User: Dr. Paul Z. Wu
 * Date: 1/13/2015
 * Time: 9:40
 * This is the loan (mortgage) calculator....
 */

?>

<?php
//Loan amount
$loanAmount = $_REQUEST['loan_amount'];
//Monthly rate
$annualRate = $_REQUEST['annual_rate'];
//Months in the loan period
$periodInYears = $_REQUEST['years'];

echo "Loan amount: $loanAmount <br/>";
echo "Annual Rate: $annualRate <br/>";
echo "Years in the loan periond: $periodInYears <br/>";

if ($loanAmount && $annualRate && $periodInYears) { // Check if these values are valid.
    $monthRate = $annualRate / 12 / 100;
    //Start to do your work here. Don't use operator '**'.


}
?>

