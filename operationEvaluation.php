<?php

function findOperator($string) {
    $operators = array("+", "-", "/", "*");

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $operators)) {
            $operator = $string[$i];
            $firstOperand = '';
            for ($j = $i - 1; $j >= 0; $j--) {
                $firstOperand = $string[$j] . $firstOperand;
            }

            $secondOperand = '';
            for ($n = $i + 1; $n < strlen($string); $n++) {
                $secondOperand = $secondOperand . $string[$n];
            }

            $firstOperand = floatval($firstOperand);
            $secondOperand = floatval($secondOperand);

            switch ($operator) {
                case '+':
                    $result = $firstOperand + $secondOperand;
                    echo "Result: $result\n";
                    break;
                case '-':
                    $result = $firstOperand - $secondOperand;
                    echo "Result: $result\n";
                    break;
                case '*':
                    $result = $firstOperand * $secondOperand;
                    echo "Result: $result\n";
                    break;
                case '/':
                    if ($secondOperand != 0) {
                        $result = $firstOperand / $secondOperand;
                        echo "Result: $result\n";
                    } else {
                        echo "Error: Division by zero\n";
                    }
                    break;
                default:
                    echo "Error: Invalid operator\n";
            }
        }
    }
}

findOperator("15*7");