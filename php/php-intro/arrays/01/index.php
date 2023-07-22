<?php

// Arrays 


$names = [

'mohammad',
'Ibrahim',
'Nadia',
'Samer'

];


$names[] = 'Ali';

$names[1] = 'Edited';

unset($names[1]);

print_r($names);

