<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<head>
<body>

<?php 
$characterName = "John";
$characterAge = 35;
echo "<h1>My Website</h1>";
echo "<hr>";
echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";
$characterName = "Helen";
echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";

$phrase = "Girafee Academy";
$age = 30;
$gpa = 30.3;
$isMale = false;
$phrase[0] = "B";
echo str_replace("Giraffe", "Panda", $phrase);
echo substr($phrase, 8, 3);

echo "Numbers <br>";
$num = 10;
$num += 25;
echo $num;






?>
</body>
</html>