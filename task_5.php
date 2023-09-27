<?php
function generatePassword($length) {
    // Define characters for each category
    $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numberChars = '0123456789';
    $specialChars = '!@#$%^&*()_+';

    // Combine all characters into one string
    $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

    // Initialize the password variable
    $password = '';

    // Generate the password
    for ($i = 0; $i < $length; $i++) {
        // Choose a random character from the combined set
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];

        // Append the random character to the password
        $password .= $randomChar;
    }

    return $password;
}

// Generate a password with a length of 12 characters
$length = 12;
$password = generatePassword($length);

// Print the generated password
echo $password;
?>
