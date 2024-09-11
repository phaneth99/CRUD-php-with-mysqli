<?php
// Data type
/*
$name = "Bro Code";
$food = "pizza";
$email = "brocode@gmail.com";
$age = 21;
$users = 3;
$quantity = 10;
$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;
$employee = true;
$online = false;
$for_sale = true;
$total = NULL;

echo "Hello {$name}<br>";
echo "You Like {$food}";
echo "<br> You email is : {$email}";
echo "<br> You are {$age} years olds";
echo "<br> There are {$users} user online";
echo "<br> You like {$quantity} items";
echo "Your Pizza is : \${$price} <br>";
echo "Your GPA : {$gpa} <br>";
echo "The sales tax rate : \${$tax_rate} <br>";

$total = $quantity * $price;

echo "Your Total is \${$total}";
*/

//Arithemtic operator
/*
$x = 10;
$y = 2;
$z = NULL;

$z = $x * $y;

echo $z;
*/

/*
// Increment  / Decrement Operator

$counter = 10;
$counter -= 2;
echo $counter;
*/

/*
//  Operator Precdence

// ()
//  **
//  * | % 
//  + -
$total = 1 + 3 - 3 * 4 / 25625;
echo $total;
*/

// $_GET AND $_POST
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="GET">
        <label for=" urname:">Username:</label>
        <input type="text" name="uname"><br>
        <label for="pass">Password</label>
        <input type="password" name="pass"><br>
        <input type="submit" Value="login">
    </form>
    <?php
    $uname = $_REQUEST["uname"];
    echo "{$uname} <br>";
    echo "{$_REQUEST["pass"]}<br>";
    ?>
</body>

</html>

<!-- Build in Function -->

<!-- abs($x);
round($x) up and down the vlaue;
floor($x); down the value
ceil($x); up and down
sqrt($x);
pow($x,$y);
max($x ,$y,$z);
min($x ,$y,$z);
pi();
rand(1,6) start 1-6; -->

<!-- if statement -->