
<?php
session_start();
print_r($_SESSION);
echo $_SESSION['hello'];
session_unset();
session_destroy();
print_r($_SESSION);

