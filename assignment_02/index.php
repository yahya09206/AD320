<?php
/**
 * Created by PhpStorm.
 * User: Dr. Paul Z. Wu
 * Date: 1/13/2015
 * Time: 9:40
 * This is the loan (mortgage) calculator....
 */

?>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
<h1 align="center"> Loan Calculator </h1>
<div>
    <form>
        <table align="center">
            <tr>
                <td> Loan Amount</td>
                <td><input name="loan_amount" type="text"/></td>
            </tr>
            <tr>
                <td> Interest Rate (annual %)</td>
                <td><input name="annual_rate" type="text"/></td>
            </tr>
            <tr>
                <td> Period in years</td>
                <td><input name="years" type="text"></td>
            </tr>
            <tr>

                <td colspan="2">
                      <input type="submit"> </td>
            </tr>

        </table>
    </form>

</div>
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
echo "Monthly payment is: $monthPay <br/>";
echo "Total interest is: $totalInt <br/>";

if ($loanAmount && $annualRate && $periodInYears) { // Check if these values are valid.
    $monthRate = $annualRate / 12 / 100;
    //Start to do your work here. Don't use operator '**'.


}
?>
</body>

</html>

