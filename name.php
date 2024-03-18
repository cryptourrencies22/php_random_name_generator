<?php
// Array of syllables to generate random names
$syllables = array('ba', 'be', 'bi', 'bo', 'bu', 'da', 'de', 'di', 'do', 'du', 'ga', 'ge', 'gi', 'go', 'gu', 'ka', 'ke', 'ki', 'ko', 'ku', 'ma', 'me', 'mi', 'mo', 'mu', 'na', 'ne', 'ni', 'no', 'nu', 'pa', 'pe', 'pi', 'po', 'pu', 'ra', 're', 'ri', 'ro', 'ru', 'sa', 'se', 'si', 'so', 'su', 'ta', 'te', 'ti', 'to', 'tu', 'va', 've', 'vi', 'vo', 'vu');

// Function to generate a random name
function generateRandomName($syllables, $minSyllables, $maxSyllables) {
    $name = '';
    $numSyllables = mt_rand($minSyllables, $maxSyllables);
    for ($i = 0; $i < $numSyllables; $i++) {
        $name .= $syllables[array_rand($syllables)];
    }
    return ucfirst($name); // Capitalize the first letter of the name
}

// Generate a random name
$randomName = generateRandomName($syllables, 2, 3);
echo "Random Name: $randomName";
?>
