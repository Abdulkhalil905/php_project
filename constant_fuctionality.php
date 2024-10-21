<?php
// Define constant for exchange rate (for example, 1 USD = 0.85 EUR)
define('EXCHANGE_RATE', 0.85);

function convertAmounts($amounts, $convertTo) {
    $convertedAmounts = [];
    
    foreach ($amounts as $amount) {
        if ($convertTo == 'EUR') {
            // Convert from USD to EUR
            $convertedAmounts[] = $amount * EXCHANGE_RATE;
        } elseif ($convertTo == 'USD') {
            // Convert from EUR to USD
            $convertedAmounts[] = $amount / EXCHANGE_RATE;
        }
    }
    
    return $convertedAmounts;
}

// Get user input for the conversion direction
$convertTo = readline("Convert to (USD/EUR): ");

// Check if the user entered a valid option
if ($convertTo != 'USD' && $convertTo != 'EUR') {
    echo "Invalid option. Please enter 'USD' or 'EUR'.\n";
    exit;
}

// Get an array of amounts from the user (comma-separated)
$amountsInput = readline("Enter the amounts (comma-separated): ");
$amounts = array_map('floatval', explode(',', $amountsInput));

// Convert the amounts
$convertedAmounts = convertAmounts($amounts, $convertTo);

// Display the converted amounts
echo "Converted amounts: " . implode(', ', $convertedAmounts) . "\n";
?>
