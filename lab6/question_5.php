<?php 
    echo '<h1>Sorting</h1>';
    echo '<h2>sort() sorting</h2>';
    $student = ['Sagar', 'Sagun', 'Bandana', 'Swachhita', 'Shuvam'];
    $numbers = [11,33,44,1,55,23,6,34];
    $cars = ['bmw'=>10, 'lamborgani'=>5, 'jeep'=>3, 'aulto800'=>1];
     sort($student);

    foreach($student as $name){
        echo "<br> $name";

    }
    echo '<h2>rsort sorting reversing</h2>';
    rsort($numbers);

    foreach($numbers as $number){
        echo"<br> $number";
     }

    echo'<h2>asort() sorting by value in associative array</h2>';
    asort($cars);

    foreach($cars as $brand=>$quantity){
    echo "<br> $brand: $quantity";
    }

    echo '<h2>kshort() sorting by key</h2>';
    ksort($cars);

    foreach($cars as $brand=>$quantity){
        echo "<br> Brand= $brand , Quantity = $quantity";
    }

    echo '<h2>arsort() sorting array in decreasing value</h2>';
    arsort($cars);

    foreach($cars as $brand=>$quantity){
        echo "<br>Brand of the car: $brand , Quantity: $quantity";
    }

    echo'<h2>krsort() sorting by reversing key </h2>';
    krsort($cars);

    foreach($cars as $brand=>$quantity){
        echo"<br> Brand: $brand , Quantity: $quantity";
    }
?>