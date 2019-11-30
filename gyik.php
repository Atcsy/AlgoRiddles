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
    
    foreach ($arrays as $arrayNumber => $arr) {
        $datesInTheCurrentLoop = [];

        foreach ($arr as $row) {
          
            list($key, $value) = $row;
            $datesInTheCurrentLoop[] = $key;
  
            // Ha ez az elso array es a datum nem letezik, akkor letrehozzuk
            if (!array_key_exists($key, $result) && $arrayNumber == 0) {
                $result[$key] = [$value];
                continue;
            }

            // Ha ez nem az elso array es a datum nem letezik, akkor annyiszor rakunk "-" -et, ahanyadik array-nel eppen jarunk majd hozzaadjuk az erteket
            if (!array_key_exists($key, $result) && $arrayNumber != 0) {
                $result[$key] = array_fill(0, $arrayNumber, '-');
                $result[$key][] = $value;
                continue;
            // Ha ez nem az elso array, de a datum mar letezik, akkor csak hozzaadjuk az erteket a meglevo arrayhez
            }
 
            $result[$key][] = $value;
        }

        // Amennyiben ez nem az elso array, akkor megnezzuk, hogy mik azok a datumok amik szerepeltek mar a resultban, de a jelenlegi array-bol hianyzik
        // Amint megvannak ezek a datumok, a jelenlegi kor ertekekent hozzaadunk egy "-"-t
        if ($arrayNumber != 0) {
            $missingKeys = array_diff(array_keys($result), $datesInTheCurrentLoop);
            var_dump($missingKeys);
            echo "\n";
            foreach ($missingKeys as $ind => $mKey) {
                $result[$mKey][] = '-';
            }
        }
    }
    
    return $result;
    
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
