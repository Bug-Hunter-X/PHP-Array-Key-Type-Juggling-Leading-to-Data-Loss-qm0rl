To avoid this issue, always use string keys when there's a possibility of numeric equivalence.  Here's a corrected version:

```php
$myArray = [];
$myArray['1.0'] = 'one';
$myArray['1'] = 'One';

echo count($myArray); // Outputs 2

//Or if the key is generated dynamically from calculation use type casting
$floatKey = 1.0;
$myArray[(string)$floatKey] = "one";
$myArray['1'] = 'One';
echo count($myArray); // Outputs 2
```

By using strings, we prevent PHP from automatically converting the keys to integers and overwriting values.