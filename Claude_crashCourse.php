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

$students = array(
        array("kabanda", 14, 90),
        array("uwera", 14, 86),
        array("Ndagijimana",14, 87)
);

for( $row = 0; $row < 3; $row++){
    for($col = 0; $col < 3; $col++){
        echo $students[$row][$col] . "  ";
    }echo "<br>";
}
/*This prints arrays in a readable format for simple display
without complexity of data types and length which maybe
unnecessary in some cases*/
print_r($students);
?>
