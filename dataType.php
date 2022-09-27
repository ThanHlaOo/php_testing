<html>
<h1>Variable</h1>
<?php
$num1 = 4;
$num2 = 6;
$str = "A fox live in forest";
define("PI", 3.142);
$name = "Mg Kyaw";
function sayName()
{
    global $name;
    if (true) {
        $name = "Mg Ba";
    }
    echo "My Name is $name";
}
sayName();
echo substr($str, 0, 6);
echo "<br>";
echo str_replace("fox", "tiger", $str);
echo "<br>";
echo strlen("Hello World");
echo "<br>";
$total = $num1 + $num2;
?>
<p>Total: <?= $total ?></p>
<?php
$hour = date('h');
if ($hour < 6 || $hour > 18) {
    echo "<b> Evening</b>";
} else {
    echo "<i> Morning</i> <br>";
}
var_dump($num1);
echo "<br>";
var_dump($name);
var_dump(PI);

//Array
$fruit = array("orange", "apple", "mango");
$user = ["name" => "Mg Mg", "age" => 22];
[$orange, $apple, $mango] = $fruit;
$users = [
    ["name" => "mya mya", "age" => 20],
    ["name" => "hla hla", "age" => 15],
    ["name" => "thuzar", "age" => 40],
];
$fruit[5] = "coconut";
print_r($user['name']);
echo "<br>";
echo $apple;
echo "<br>";
print_r($fruit);
echo "<br>";

//Array Method

echo in_array("mango", $fruit);
echo "<br>";
echo array_search("mango", $fruit);
echo "<br>";
print_r(array_splice($fruit, 1, 1));
sort($fruit);
print_r($fruit);
$input = "A quick fox brown";
$arr = explode(" ", $input);
echo "<br>";
print_r($arr);
$str = implode(" ", $arr);
echo "<br>";
echo $str;
// Spread Operators
$num1 = [4, 5];
$num2 = [...$num1, 6];
echo "<br>";
print_r($num2);
?>

</html>