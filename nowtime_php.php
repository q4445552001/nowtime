<?php

header('refresh: 1;url="nowtime.php"');

date_default_timezone_set('Asia/Taipei');

echo date('現在時間 : Y-m-d H:i:s');

?>