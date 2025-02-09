# PHP Array Key Type Juggling Bug

This repository demonstrates a subtle bug in PHP related to array key type juggling.  When using floating-point numbers as array keys, PHP's loose typing can lead to unexpected data loss if the keys are numerically equivalent to integers.  The `bug.php` file shows the issue in action, while `bugSolution.php` offers a solution.

## Problem

The core problem is that PHP may treat floating-point numbers as integers in certain array key comparisons.  This can result in unintentional overwriting of array elements.

## Solution

The most reliable solution is to ensure consistent array key types. If you anticipate potentially numeric keys, use string keys consistently to avoid PHP's type juggling.