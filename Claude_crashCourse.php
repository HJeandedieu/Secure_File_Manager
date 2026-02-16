<html>
<head>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #000;
            color: white;
        }
    </style>
</head>
</html>


<?php

$age = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 38,
);

foreach($age as $name => $ageValue){
    echo "Name: $name, Age : $ageValue<br>";
}

?>
