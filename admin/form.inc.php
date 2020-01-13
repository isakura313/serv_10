<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/config.inc.php');

// define('KB', 1024);
// define('MB', 1048576);
// if ($_FILES['file']['size'] < 5*MB)



$header = $_POST['header'];
$id = $_POST['id'];
$parag =  $_POST['parag'];
// echo($header);
// echo($parag);

if($_POST['answer'] == "ins"){
    // Реализация загрузки файла
$upload_name = uniqid() . $_FILES['picture']['name'];
$path ="img/upload_pic/". $upload_name;
$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/serv_10/img/upload_pic/';
$uploadfile = $uploaddir . $upload_name;

echo '<pre>';
if (move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}

$sql = "INSERT INTO cards VALUES ('$id', '$path','$header', '$parag')";
    if ($connect->query($sql)){
        echo "Новая запись успешно загружена";
        }
        else{
        echo "Error: ". $sql ."
        ". $connect->error;
        }
        $connect->close();
header("Location: http://192.168.64.3/serv_10/admin.cards.php"); 
exit();

}

if($_POST['answer'] == "del"){
    $header = trim($header);
    $sql = "SELECT Cards_icon FROM cards WHERE Cards_h5 = '$header'";
    $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()){
         unlink($_SERVER["DOCUMENT_ROOT"] .'/serv_10/'. $row['Cards_icon'] );
    }

    $sql = "DELETE FROM cards WHERE Cards_h5 = '$header'";
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