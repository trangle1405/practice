<html>

<head>
    <title>Gửi email trong PHP</title>
</head>

<body>

<?php
$to = "xyz@somedomain.com";
$subject = "Đây là subject";

$message = "<b>Đây là HTML Message.</b>";
$message .= "<h1>Đây là headline.</h1>";

$header = "From:abc@somedomain.com \r\n";
$header = "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true )
{
    echo "Gửi email thành công ...";
}
else
{
    echo "Không thể gửi email ...";
}
?>

</body>
</html>