<?php

function countVowels($str) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($str) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

function reverseString($str) {
    return strrev($str);
}

function processStrings($strings) {
    foreach ($strings as $string) {
        $vowelCount = countVowels($string);
        $reversedString = reverseString($string);
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}

// Given array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Process and print the strings
processStrings($strings);
?>