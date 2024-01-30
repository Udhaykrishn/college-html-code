<?php

$dayColors = [
    "Sunday"=>"green",
    "Monday"=>"red",
    "Tuesday"=>"blue",
    "Wednesday"=>"yellow",
    "Thursday"=>"purple",
    "Friday"=>"orange",
    "Saturday"=>"gray"
];

$now = date("l");

$backgroundColor = "white";

if(array_key_exists($now,$dayColors)){
    $backgroundColor = $dayColors[$now];
}
?>

<style>
    body{
        background-color: <?php echo $backgroundColor?>;
    }
</style>
<h2>Welcome Today is <?php echo $now ?></h2>