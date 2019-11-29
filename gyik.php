<?php
declare(strict_types = 1);

$arr1 = [
    ['tegnapelott','10'],
    ['tegnap','11'],
    ['ma','12'],
    ['holnaputan','13']
];

$arr2 = [
    ['tegnapelott','1'],
    ['tegnap','2'],
    ['holnap','3'],
    ['holnaputan','4']
];

$arr3 = [
    ['jovoheten', '9'], 
];

$arr4 = [
    ['ma', '14'], 
];


function customMerge(array ...$arrays) {
    $result = [];
    
};


/*
Expected result:
  ['tegnapelott','10','1'],
  ['tegnap','11', '2'],
  ['ma','12', '-'], 
  ['holnap', '-', '3'],
  ['holnaputan','13', '4']
*/


/*
Array
(
    [tegnapelott] => Array
        (
            [0] => 10
            [1] => 1
            [2] => -
            [3] => -
        )

    [tegnap] => Array
        (
            [0] => 11
            [1] => 2
            [2] => -
            [3] => -
        )

    [ma] => Array
        (
            [0] => 12
            [1] => -
            [2] => -
            [3] => 14
        )

    [holnaputan] => Array
        (
            [0] => 13
            [1] => 4
            [2] => -
            [3] => -
        )

    [holnap] => Array
        (
            [0] => -
            [1] => 3
            [2] => -
            [3] => -
        )

    [jovoheten] => Array
        (
            [0] => -
            [1] => -
            [2] => 9
            [3] => -
        )

)

*/
