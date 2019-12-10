<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/config.inc.php');

$id = $_GET['id'];
$p = $_GET['parag_content'];

$sql = "INSERT INTO parag VALUES ('id', '$p')";
    if ($connect->query($sql)){
        echo "Новая запись успешно загружена";
        }
        else{
        echo "Error: ". $sql ."
        ". $connect->error;
        }
        $connect->close();
// sleep(500);
// header("Location: http://192.168.64.3/serv_10/admin.parag.php"); 
exit();
?>