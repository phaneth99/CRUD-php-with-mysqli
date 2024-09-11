<?php
// associate array = An Array made of eky = > Value pairs

$capital = array(
    "usa" => "washington D.C",
    "japan" => "Kyoto",
    "south korea" => "seoul",
    "india" => "New Delhi"

);

$capital["usa"] = "Los";
array_pop($capital);
// Remove the last Element

array_shift($capital);
// Revove the fast Element

$key = array_keys($capital);
// Array key

$value = array_values($capital);
// Array Value

$capital =  array_flip($capital);
// To Flip the key to value and value to key

$capital = array_reverse($capital);
// To Reverse the  keys and value


// foreach ($capital as $key => $value) {
//     echo "{$key} = {$value}<br>";
// }

// foreach ($capital as $keys  => $value) {
//     echo "{$keys} = {$value}<br>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>

</body>
<div class="">
    <form action="array.php" method="post">
        <label for="">Input Capital:</label>
        <input type="text" name="cap"><br>
        <input type="submit" value="Enter">
    </form>
</div>

</html>

<?php
$capitals = array(
    "usa" => "washington D.C",
    "japan" => "Kyoto",
    "south korea" => "seoul",
    "india" => "New Delhi"

);
$capitals = $capitals[$_POST["cap"]];
echo "The Captital is {$capitals} <br>";
?>