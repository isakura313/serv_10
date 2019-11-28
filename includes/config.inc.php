<?php
$connect = new mysqli("localhost", "root", "", "10_09");
$connect->set_charset("utf8");
if ($connect->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $connect->connect_errno . ") " . $connect->connect_error;
}
//здесь у нас находятся только настройки работы с нашей БД

?>