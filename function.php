<html>
<h1>Function</h1>
<?php

//Built-in Functions
if (is_numeric(123)) {
    echo "true";
} else {
    echo "false";
}
echo "<br>";
echo number_format(2509663), "<br>";
echo rand(), "<br>";
echo round(3.49), "<br>";
echo date('d m y'), "<br>";

//User-defined Function
function sayHello()
{
    echo "Hello world!", "<br>";
}
sayHello();

//Functions With Parameters
function familyName($fname)
{
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
function familyNames($fname, $year)
{
    echo "$fname Refsnes. Born in $year <br>";
}

familyNames("Hege", "1975");
familyNames("Stale", "1978");
familyNames("Kai Jim", "1983");
//Strict Declaration

//declare(strict_types=1);
//function add(int $a, int $b) {
//echo $a + $b;
//}
//add(1, "2");

//Function with Optional Parameters & Default Value
function setHeight(int $minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);

//Returning Values From a function
function sum(int $x, int $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);

//Passing Arguments to a function By Reference
function add_five(&$value)
{
    $value += 5;
}

$num = 2;
add_five($num);
echo "<br>", $num;

//Global Keyword And Variable Scope
$name = "Mg Kyaw";
function sayName()
{
    global $name;
    if (true) {
        $name = "Mg Ba";
    }
    echo "<br>My Name is $name";
}
sayName();
//Dynamic Function Calls

function sayHi()
{
    echo "<br>Hello<br />";
}

$function_holder = "sayHi";
$function_holder();

//Recursive Functions
function display($number)
{
    if ($number <= 5) {
        echo "$number <br/>";
        display($number + 1);
    }
}

display(1);
?>
</html>