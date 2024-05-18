<?php
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the number of vowels in a string
function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

// Iterate over each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}
?>