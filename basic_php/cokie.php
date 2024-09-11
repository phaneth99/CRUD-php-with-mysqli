<?php
// setcookie("fav_food", "pizza", time() + 86400 * 3, "/");
// setcookie("fav_food", "pizza", time() - 0, "/");

if (empty($_COOKIE["fav_food"])) {
    echo "No favorite food";
} else {
    echo "{$_COOKIE['fav_food']}";
}