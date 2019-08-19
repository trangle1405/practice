<?php
if(isset($_COOKIE)) {
    print_r($_COOKIE);
}
setcookie ( "cookie1" , "test_cookie", time () - 360, '/');