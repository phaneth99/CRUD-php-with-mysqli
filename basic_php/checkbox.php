<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Box</title>
</head>

<body>
    <form action="checkbox.php" Method="POST">
        <input type="checkbox" name="food[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="food[]" value="Hamburger">
        Hamburger<br>
        <input type="checkbox" name="food[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="food[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit" value="Add Cart">
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    if (isset($_REQUEST['food'])) {
        $food = $_REQUEST['food'];
        foreach ($food as $key => $item) {
            echo "{$item}<br>";
        }
    } else {
        echo "Please Select Food";
    }
}
?>