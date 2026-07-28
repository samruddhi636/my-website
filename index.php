<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

switch($operator)
{
    case "+":
        $result = $num1 + $num2;
        break;

    case "-":
        $result = $num1 - $num2;
        break;

    case "*":
        $result = $num1 * $num2;
        break;

    case "/":
        if($num2 != 0)
            $result = $num1 / $num2;
        else
            $result = "Cannot divide by zero!";
        break;

    case "%":
        if($num2 != 0)
            $result = $num1 % $num2;
        else
            $result = "Cannot divide by zero!";
        break;

    default:
        $result = "Invalid Operation";
}

echo "<div class='result'>Answer = <br><br><strong>$result</strong></div>";

?>

<a href="index.html" class="back">← Back to Calculator</a>

</div>

</body>
</html>