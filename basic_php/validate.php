<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate</title>
</head>

<body>
    <form action="validate.php" method="POST">
        Username:
        <input type="text" name="uname"><br>
        Age:
        <input type="text" name="age">
        Email:
        <input type="text" name="email">
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $uname = filter_input(INPUT_POST, "uname", FILTER_SANITIZE_SPECIAL_CHARS);
    echo "Your Username : {$uname}<br>";
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    echo "You are {$age}";
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "You are {$email}";
}
?>