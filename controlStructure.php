<?php
//Operators
$x = 3;
$y = 5;
echo $x < $y or $x === 3; // 1 (true)
echo $x < $y xor $x === 3; // (false)

echo isset($name) ? $name : "Unknown";
echo "<br>";

$x = 3;
$y = 5;
echo $x === $y || $x === 3; // 1 (true)
echo $x === $y or $x === 3; // 1 (true)
echo $x === $y && $x === 3; // (false)
echo $x === $y and $x === 3; // (false)
echo !($x === $y and $x === 3); // 1 (true)

$num = 3;
$num += 2;
echo $num;

//If Statement
$day = date("D");
if ($day === "Sun") {
    echo "Today is Sunday.";
} elseif ($day === "Sat") {
    echo "Today is Saturday.";
} else {
    echo "Today is a weekday.";
}
echo "<br>";

//Switch Statement
$day = date("D");
switch ($day) {
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
while ($i < count($nums)) {
    $result += $nums[$i];
    $i++;
}
echo $result, "<br>";

//Continue 
$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while ($i < count($nums)) {
    if ($nums[$i] < 0) {
        $i++;
        continue;
    }
    $result += $nums[$i];
    $i++;
}
echo $result, "<br>"; // 683

//Break
$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
while ($i < count($nums)) {
    if ($nums[$i] < 0) {
        $i++;
        break;
    }
    $result += $nums[$i];
    $i++;
}
echo $result, "<br>"; // 683

//Do While 

$nums = [12, 42, -2, 8, 621];
$i = 0;
$result = 0;
do {
    $result += $nums[$i];
    $i++;
} while ($i < count($nums));
echo $result, "<br>"; // 681

//For Loop
$nums = [12, 42, -2, 8, 621];
$result = 0;
for ($i = 0; $i < count($nums); $i++) {
    $result += $nums[$i];
}
echo $result, "<br>"; // 681

$user = ["alice" => 98, "bob" => 95];
$result = [];
foreach ($user as $name => $point) {
    $result[] = $name;
}
print_r($result);

//Foreach 
$userArr = ["alice" => 98, "bob" => 95];
$result = [];
foreach ($userArr as $name => $point) {
    $result[] = $name;
}
print_r($result);
