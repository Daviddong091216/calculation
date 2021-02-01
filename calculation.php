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
                <input type="text" size="5" name="num1" /*value="<?php echo $num1?>*/">
            </td>
            <td>
                <select name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="%">%</option>
                    <option value="**">**</option>
                </select>
            </td>
            <td>
                <input type="text" size="5" name="num2" /*value="<?php echo $num2?>"*/>
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