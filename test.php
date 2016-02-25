<?php
require_once('function.php');


$test="I Love YOu do you love me we are happy family";

$test2=contoarray($test);
//print_r($test2);
//echo PHP_EOL;
$word="fuck I love me fuck family";
$word2=contoarray($word);
//print_r($word2);
//echo PHP_EOL;

// $table=kmptable($word2);
// print_r($table);
// echo PHP_EOL;
// if(kmp($table, $word2, $test2))
// {
// 	echo "fuck";
// }else
// {
// 	echo "no f";
// }
$result=LCS($test2,$word2);

echo $result;



?>
