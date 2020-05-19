<?php

$fp = fopen('../stats.log', 'a+');
fwrite($fp, date('YmdHis').' - '.$_SERVER['HTTP_USER_AGENT'].PHP_EOL);
fclose($fp);
echo 'ok';