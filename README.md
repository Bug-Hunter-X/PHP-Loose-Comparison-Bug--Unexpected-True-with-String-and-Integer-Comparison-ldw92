# PHP Loose Comparison Bug
This repository demonstrates a common, yet subtle, bug in PHP related to loose comparisons (`==`) and type juggling. The `bug.php` file contains code that incorrectly evaluates non-numeric strings as equal to the integer 1. The `bugSolution.php` file shows how to correct the comparison to use strict comparison (`===`) to prevent this unexpected behavior.

## Problem
PHP's loose comparison operator (`==`) will perform type juggling, sometimes leading to unexpected results.  For example, comparing a string '1' to the integer 1 will result in true with loose comparison but false with strict comparison. This bug leverages this behavior to illustrate the problem in more depth using strings that would not typically be considered equal to an integer 1.

## Solution
The solution is to always use PHP's strict comparison operator (`===`) when performing comparisons to avoid type juggling issues. Strict comparison checks for equality in both value and type.
