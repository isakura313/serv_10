<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/config.inc.php');

$pattern = '/[?A-Z]+[a-z]+[0-9]+/';

if (preg_match($pattern, $_POST['password'])) {
    echo "Пароль норм";
    $name  = $_POST['name'];
    $password = md5($_POST['password']);
    session_start();
    $name = trim($name);
$sql = "SELECT * FROM users WHERE Name = '$name'";
$result = $connect->query($sql);

while ($row = $result->fetch_assoc()){
    if($row['Password'] == $password ){
        echo('фейс контроль пройден');
        $_SESSION['user_name'] = $name;
        $_SESSION['password'] = $password;
        header("Location:/serv_10/admin/admin.php"); 
    } else{
        echo("стучитесь в личку админу");
    }
     
}

} else {
    echo "Вась сделай нормальный пароль, как человек";

}






