<?php
$numbers = [10, 30, 4, 23, 98, 87, 36];
$cars = ['BMW','Toyota','Suzuki', 'Tata', 'Bugati'];
$greeting = 'Goodmorning Sagar chokhal dost!';
echo '<h2>Array functions </h2>';

echo 'Length of the $numbers array  : ';
echo count($numbers);

echo '<br> Array Push in $numbers: ';
array_push($numbers, "60");

foreach($numbers as $number) {
    echo "<br> $number";
}
echo'<br> Array pop<br>';
array_pop($numbers);
foreach($numbers as $values){
    echo "$values<br>";
}
echo'<br>Array merge<br>';
print_r(array_merge($numbers,$cars));

echo'<br>Array sum<br>';
$sum = array_sum($numbers);
echo $sum;

echo'<br>Array slice<br>';
print_r(array_slice($numbers,3));



echo '<h2>String function</h2>';
echo '<h4>substr() function</h4>';
$extract = substr($greeting,7);
echo "<br>$extract";
echo '<h4>strlen() function</h4>';
echo strlen($greeting);

echo '<h4>str_replace</h4>';
echo str_replace("love","maya", "I love you");
echo '<h4>trim function</h4>';
echo "<br>$greeting <br>";
echo trim($greeting,'Got!');
echo '<h4>find the first occuance</h4>';
echo strpos("Oranges are Orange because Oranges are orange","are");
echo '<h4>strtolower TO CONVERT IN lower case</h4>';
echo strtolower("SAGAR SINGER");
echo '<h4>convert into upper case</h4>';
echo strtoupper('salman khan');
?>