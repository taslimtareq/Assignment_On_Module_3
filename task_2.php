<?php
function removeEvenNumbers($numbers) {
    // Create an empty array to store the result
    $result = array();

    // Loop through the original array
    foreach ($numbers as $number) {
        // Check if the number is odd (not divisible by 2)
        if ($number % 2 != 0) {
            // Add the odd number to the result array
            $result[] = $number;
        }
    }

    // Print the resulting array
    print_r($result);
}

// Create an array containing numbers 1 to 10
$numbers = range(1, 10);

// Call the function to remove even numbers and print the resulting array
removeEvenNumbers($numbers);
?>
