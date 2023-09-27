<?php
function calculateAverageGrades($studentGrades) {
    // Loop through each student's grades
    foreach ($studentGrades as $student => $grades) {
        // Calculate the average grade for the student
        $average = array_sum($grades) / count($grades);

        // Print the student's name and average grade
        echo "Student: $student, Average Grade: $average\n";
    }
}

// Create a multidimensional array to store student grades
$studentGrades = array(
    "Student1" => array("Math" => 85, "English" => 92, "Science" => 78),
    "Student2" => array("Math" => 88, "English" => 95, "Science" => 90),
    "Student3" => array("Math" => 75, "English" => 84, "Science" => 88)
);

// Call the function to calculate and print average grades for each student
calculateAverageGrades($studentGrades);
?>
