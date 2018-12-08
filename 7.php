<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="refresh" content="1"/>
</head>
<body>
<?php
date_default_timezone_set('Asia/kolkata');
$n=strtotime("now");
echo"current time is ".date("h:i:s:a",$n);
?>
</body>
</html>
