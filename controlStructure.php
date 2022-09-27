<?php
//Operators
echo isset($name) ? $name : "Unknown";
echo "<br>";

//If Statement
$day = date("D");
if ($day === "Sun"){
    echo "Today is Sunday.";
}elseif ($day === "Sat") {
    echo "Today is Saturday.";
}else {
    echo "Today is a weekday.";
}
echo "<br>";
//Switch Statement
$day = date("D");
switch ($day){
    case "Sat":
    case "Sun":
        echo "Weekend";
        break;
    case "Fri":
        echo "TGIF";
        break;
    default:
        echo "Weekday";
        break;
}
echo "<br>";
//While Statement

$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while ($i < count($nums)){
    $result += $nums[$i];
    $i++;
}
echo $result;