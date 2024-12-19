<?php
function checkValue($userInput) {
    // Use strict comparison to avoid type juggling
    if ($userInput === '1') {
        return true;
    } else {
        return false;
    }
}

// Test cases
$testCases = ['1', 'true', 'false', '0', '10', ' '];

foreach ($testCases as $testCase) {
    $result = checkValue($testCase);
    echo "Input: '" . $testCase . "', Result: " . ($result ? 'true' : 'false') . "\n";
}
?> 