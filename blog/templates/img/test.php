<?php
$resource = mysql_connect('rustam21.beget.tech', 'rustam21_wp1', 'FRiweich12');
if (!$resource) {
die('Ошибка при подключении: ' . mysql_error());
}
echo 'Подключено успешно!';
mysql_close($resource);