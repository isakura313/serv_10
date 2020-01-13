<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/connect.inc.php');

session_start();
// print_r($_SESSION);


if(!isset($_SESSION['user_name'])){

    $anchors['Path'][0] = '/serv_10/admin/reg/admin_reg.php';
    $anchors['Color'][0] = "green";
    $anchors['Content'][0] = "Регистрация";
    $anchors['Path'][1] = '/serv_10/admin/reg/admin_auth.php';
    $anchors['Color'][1] = "red";
    $anchors['Content'][1] = "Авторизация";
    
} 
if(isset($_SESSION['user_name'])){
    $name = $_SESSION['user_name'];
    $password = $_SESSION['password'];
    $sql = "SELECT * FROM users WHERE Name = '$name'";
    $result = $connect->query($sql);
    $anchors['Path'][0] = '/serv_10/admin/admin.php';
    $anchors['Color'][0] = "yellow";
    $anchors['Content'][0]= " Админка";

while ($row = $result->fetch_assoc()){
    if($row['Password'] == $password){
        $flag = true;

}
}
}
echo ("

<header class='header'>
    <div id='logo'></div>

        <nav class='header__nav'>");
            for($i = 0; $i <count( $anchors['Path']); $i++){
                echo ("<a href='{$anchors['Path'][$i]}' style='color:{$anchors['Color'][$i]}'>
                    {$anchors['Content'][$i]}</a>");
            }
echo("</nav>  </header>");

if(isset($_SESSION['user_name'])){
    echo("
<form action='admin/reg/logout.inc.php' method=GET>
<div class='field'>
    <div class='control'>
        <button type='submit' class='button is-primary is-large'>Выйти отсюда</button>
    </div>
    </div>
    </form>
    </header>");
}

?>