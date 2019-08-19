<?php
$cookie_name = "cookie1";
$cookie_value = "test_cookie";
setcookie($cookie_name, $cookie_value, time()+60, "/");
if (!isset($_COOKIE[$cookie_name])){
    echo "cookie chua cai dat";

}else {
    echo "cookie ".$cookie_name." da cai dat";
 }