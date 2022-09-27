<?php
require_once('data.php');
function calculateDOB($DOB){ // This is Amaya's function and output
    $todaysDate= date('Y-m-d');
    $age = date_diff(date_create($DOB), date_create($todaysDate));
    echo $age -> format('%y');
}
?>

<?php
require_once('data.php');
function calculateLifespan($DOB){ // Adjusted Amaya's function with different formating for output 
    $todaysDate = date('Y-m-d');
    $age = date_diff(date_create($DOB), date_create($todaysDate));
    echo $age -> format('%Y years, %M months and %d days.');
}
?>