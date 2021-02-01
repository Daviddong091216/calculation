<?php
// function chooseOperator($operator){
//     $choosen_operator = "";
//     if($operator === "+") {
//         return $choosen_operator = "+";
//     } else if($operator === "-") {
//         return $choosen_operator = "-";
//     }else if($operator === "*") {
//         return $choosen_operator = "*";
//     }else if($operator === "/") {
//         return $choosen_operator = "/";
//     }else if($operator === "%") {
//         return $choosen_operator = "%";
//     }else if($operator === "**") {
//         return $choosen_operator = "**";
//     }
// }
$error = "";
$num1 = $_POST["num1"] ?? "";
$num2 = $_POST["num2"] ?? "";
$operator = $_POST["operator"] ?? "";
if(isset($_POST["sub"])){
    if($num1 === ""){
        $error .= "The first number can not be empty.<br>";
    } elseif (!is_numeric($num1)) {
        $error .= "The first number is not a number.<br>";
    }
    if($num2 === ""){
        $error .= "The second number can not be empty.<br>";
    } elseif (!is_numeric($num2)) {
        $error .= "The second number is not a number.<br>";
    }
    if (($operator == "/" || $operator == "%") && $num2 == 0) {
        $error .= "The second number can not be 0.<br>";
    }
}
?>
<table align="center" border="1" width="500">
    <caption>
        <h1>calculation</h1>
    </caption>
    <form action="" method="post">
        <tr>
            <td>
                <input type="text" size="5" name="num1" value="<?= $num1?>">
            </td>
            <td>
                <select name="operator">
                    <option value="+" <?php if($operator == "+") echo "selected"?>>+</option>
                    <option value="-" <?php if($operator == "-") echo "selected"?>>-</option>
                    <option value="*" <?php if($operator == "*") echo "selected"?>>*</option>
                    <option value="/" <?php if($operator == "/") echo "selected"?>>/</option>
                    <option value="%" <?php if($operator == "%") echo "selected"?>>%</option>
                    <option value="**" <?php if($operator == "**") echo "selected"?>>**</option>
                </select>
            </td>
            <td>
                <input type="text" size="5" name="num2" value="<?= $num2?>">
            </td>
            <td>
                <input type="submit" name="sub" value="CALCULATION">
            </td>
        </tr>
        <?php
        if(isset($_POST["sub"])) {
            echo `<tr><td> colspan="5" align="center">`;
            if(empty($error)) {
                $sum = 0;
                switch($operator) {
                    case "+":
                        $sum = $num1 + $num2;
                        break;
                    case "-":
                        $sum = $num1 - $num2;
                        break; 
                    case "*":
                        $sum = $num1 * $num2;
                        break;
                    case "/":
                        $sum = $num1 / $num2;
                        break; 
                    case "%":
                        $sum = $num1 % $num2;
                        break;
                    case "**":
                        $sum = $num1 ** $num2;
                        break; 
                }
                echo "The result is: {$num1}{$operator}{$num2} = {$sum}";
            } else {
                echo $error;
            }
            echo `</td></tr>`;
        }
    ?>
    </form>
</table>