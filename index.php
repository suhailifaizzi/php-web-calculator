<html>
<title>calculator</title>
<head><h1><center>Basic Calculator</center></h1></head>
<body>
<?php
    // Declare variables
    $initialValue;
    $initialIsInfinity = FALSE;
    
    /**
     * Condition to handle infinite value and null value
     * Condition 1:
     *  Check result of previous arithmetic is Infinity
     *  Set initial value to zero
     *  Set initial value is infinity flag to true
     *
     * Condition 2:
     *  Check that result is not empty
     *  Initialize the result to Initial value
     *
     * Condition 3:
     *  To imitate landing at page where result has no value
     *  Initialize result to zero.
     */
 /*   if("Infinity".equals(request.getParameter("result"))){
        $initialValue = 0.0;
        $initialIsInfinity = TRUE;
    }else if(request.getParameter("result") != null && !request.getParameter("result").isEmpty()){
        $initialValue = Double.parseDouble(request.getParameter("result"));
    }else{
        $initialValue = 0.0;
    }
*/
    if(isset($_GET["result"])){
        printf("Result exist");
        $initialValue = "result";
    } else {
//        printf("Result doesn't exist.");
        $initialValue = 0;
    }
/*    if(strcmp($_GET["result"], "Infinity") == 0){
        $initialValue = 0.0;
        $initialIsInfinity = TRUE;
    } else if (isset($_GET["result"]) === true && $$_GET["result"] !== '') {
        $initialValue = $_GET["result"];
    } else {
        $initialValue = 0.0;
    }
*/
?>
<center>
<?php
    /**
     * Check if initial value flag is true
     * Notify that result is not a number and resetted.
     */
    if($initialIsInfinity == TRUE){
?>
        <h2>Not a number</h2>
        <h2>Reset</h2>
<?php
    }
?>

<form action="index.php" method="get">
<table border="1">
    <col width=50?><col width=50?>
    <tbody>
        <tr>
            <!-- Number fields. -->
            <td colspan="2"><input type="number" step="any" name="insertedValue" value="<?php echo $initialValue ?>" required></td>
        </tr>
        <tr>
            <!-- Operation field. -->
            <td><button name="operation" type="submit" value="addition" style="width: 100%; font-weight: bold">+</button></td>
            <td><button name="operation" type="submit" value="subtraction" style="width: 100%; font-weight: bold">-</button></td>
        </tr>
        <tr>
            <td><button name="operation" type="submit" value="multiplication" style="width: 100%; font-weight: bold">&times</button></td>
            <td><button name="operation" type="submit" value="division" style="width: 100%; font-weight: bold">&divide</button></td>
        </tr>
        <tr>
            <td colspan="2"><button value="submit" name="operation" type="submit" style="width: 100%">=</button></td>
        </tr>
    </tbody>
</table>

<!-- Pass initial value -->
<input type="hidden" name="initialValue" value="<?php echo $initialValue ?>">
</center>

</body>
</html>