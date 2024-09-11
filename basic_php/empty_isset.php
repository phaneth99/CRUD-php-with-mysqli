<?php
// Isset() = Return TRUE if a varible is declared and not null
//  empty() = Return TRUE if a variable is not declared , false, null,""

$username = "";

// if (isset($username)) {

//     echo " This Variable is set";
// } else {
//     echo " This Variable not set";
// }

// if (empty($username)) {

//     echo " This Variable is empty";
// } else {
//     echo " This Variable not empty";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empty and Isset Funcation</title>
</head>

<body>
    <form action="function.php" method="POST">
        <label for="">Name:</label>
        <input type="text" name="name"><br>
        <label for="">password</label>
        <input type="password" name="pass"><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>

</html>

<?php
if (isset($_POST["submit"])) {
    $name = $_REQUEST["name"];
    $pass = $_REQUEST["pass"];

    if (empty($name)) {
        echo "Name Required!";
    } elseif (empty($pass)) {
        echo "Password Required!";
    } elseif (empty($name) && isset($pass)) {
        echo "Password Required!";
    } elseif (empty($pass) && isset($name)) {
        echo "Name Required!";
    } else {
        echo "The UserName:{$name} <br>";
        echo "Password:{$pass} <br>";
        echo "Login Successfully!";
    }
} else {
    echo "something went wrong!";
}
?>