<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/config.inc.php');


$Id = $_GET['id'];
$Path = $_GET['path'];
$Color = $_GET['color'];
$Content = $_GET['content'];
echo($Content);



if($_GET['answer'] == "ins"){
    $sql = "INSERT INTO anchor VALUES ('$Id', '$Path', '$Color', '$Content')";
    if ($connect->query($sql)){
        echo "Новая запись успешно загружена";
        }
        else{
        echo "Error: ". $sql ."
        ". $connect->error;
        }
        $connect->close();
// sleep(500);
// header("Location: http://192.168.64.3/serv_10/admin.anchor.php"); 
exit();
}

if($_GET['answer'] == "del"){
    $Content= trim($Content);
    $sql = "DELETE FROM anchor WHERE Id='$Id'";
    if ($connect->query($sql)){
        echo "Запись успешно удалена";
        }
        else{
        echo "Error: ". $sql ."
        ". $connect->error;
        }
        $connect->close();
exit();
}


?>