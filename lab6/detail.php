<?php
require_once("./Employee.php");
require_once("./Company.php");

$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science"; 
$gces->address = "Lamachour_19,pokhara";
array_push($gces->employees, new Employee("Sagun", "lamachaur"));
array_push($gces->employees,new Employee("Sagar", "batulechar"));
array_push($gces->employees,new Employee("Kismat","panchase"));
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>
    <table border = '1px' cellpadding='10px' cellspacing='0'>
    <thead>
    <tr>
        <th>Name</th>
        <th>Address</th>
    </tr>
    </thead>
   
    <tbody>
    <?php
    foreach($gces->employees as $employee) {  
    ?>
    <tr>
    <td><?=$employee->name?></td>
    <td><?=$employee->address?></td>
    </tr>
    <?php } ?>
    </tbody>
    
    </table>
    
</body>
</html>