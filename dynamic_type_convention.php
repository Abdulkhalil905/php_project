<?php
function processInputs($input1, $input2) {
    // Check if both inputs are numeric
    if (is_numeric($input1) && is_numeric($input2)) {
        // If both are numeric, multiply them
        return $input1 * $input2;
    }
    // Check if both inputs are strings
    elseif (is_string($input1) && is_string($input2)) {
        // Sort alphabetically if both are strings
        $inputs = [$input1, $input2];
        sort($inputs);
        return implode(', ', $inputs);  // Join them after sorting
    }
    // If one is a string and the other is not, concatenate the values
    else {
        return $input1 . $input2;
    }
}

// Get inputs from user
$input1 = readline("Enter the first input: ");
$input2 = readline("Enter the second input: ");

// Process the inputs and display the result
$result = processInputs($input1, $input2);
echo "Result: " . $result . "\n";
?>
