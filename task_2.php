<?php
//   $numbers = array(1,2,3,4,5,6,7,8,9,10);

$numbers = range(1, 10);
 function evenNumberRemover($number){
    return $number % 2 !== 0;
 }
 $numbers = array_filter($numbers, 'evenNumberRemover');

 print_r($numbers);
 ?>