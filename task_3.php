<?php
function sortGradesDescending($grades) {
    // Sort the grades array in descending order
    rsort($grades);

    // Print the sorted grades
    print_r($grades);
}

// Create an array with the grades
$grades = array(85, 92, 78, 88, 95);

// Call the function to sort and print the grades in descending order
sortGradesDescending($grades);
?>
