<?php
//  strtolower($string ) To Lower Letter

//  strtoupper($string) To Upper Letter 

//  trim($string)   To Remove white space

//  str_pad($string,length,"...")   To  more string

//  str_replace("-","/",$string)   To  Change the string (078-243-242) -> (078/243/242)

//  strrev($string)   To ​Reverse the string

//  str_shuffle($string)   To ​Reverse the string

//  strcmp($string1,string2)   To ​compare the string

//  strlen($string)   To ​count characters

//  strlen($string)   To ​count characters

//  strpos($string,"-")   To ​check the string index

$username = "Bro The Code";
$uname = array("Bro", "The", "Code");

// echo $first_name = substr($username, 0, 3);
// echo $last_name = substr($username, 4);

// $fullname = explode("", $username); // Array
$fullname = implode("", $uname);
echo $fullname;
