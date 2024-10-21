<?php
function processInputs($input1, $input2) {
    if (is_numeric($input1) && is_numeric($input2) && !is_string($input1) && !is_string($input2)) {
        return $input1 * $input2;
    }
    elseif (is_string($input1) && is_string($input2)) {
        $strings = [$input1, $input2];
        sort($strings);  
        return implode(', ', $strings);
     }
    else {
        return $input1 . $input2;
    }
}

// Example usage:
$input1 = "34";
$input2 = "34";

$result = processInputs($input1, $input2);
echo "Result: " . $result;
?>
