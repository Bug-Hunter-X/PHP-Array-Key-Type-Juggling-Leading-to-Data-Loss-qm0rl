In PHP, a common yet subtle error arises when dealing with array keys that aren't simple strings or integers.  Consider this example:

```php
$myArray = [];
$myArray[1.0] = 'one';
$myArray[1] = 'One';

echo count($myArray);
// Outputs 1, not 2 as you might expect!
```

PHP's type juggling can lead to unexpected key comparisons.  The float `1.0` is treated as equivalent to the integer `1`, causing the second assignment to overwrite the first. This behavior might not be immediately obvious, especially when dealing with keys derived from calculations or external sources.