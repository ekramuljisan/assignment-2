<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels in the string
    $vowelCount = preg_match_all('/[aeiou]/', $string);

    // Reverse the string
    $reversedString = strrev($string);

    // Print the result
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}
