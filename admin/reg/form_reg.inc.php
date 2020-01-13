<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/config.inc.php');
$name  = $_POST['name'];
$email  = $_POST['mail'];

$name = trim($name);
$mail = trim($email);

$pattern = '/^[A-Z]+[a-z]+[0-9]+/';
$pattern_name = '/\w{3,}/';
$pattern_mail = '/\w+@\w+\.\w+/';
$pattern_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

if (preg_match($pattern_name, $name) &&
    preg_match($pattern_mail, $mail) &&
    preg_match($pattern_password, $_POST['password'])) {

        $password = md5($_POST['password']);
        $sql = "SELECT * FROM users WHERE Mail = '$email'";
        $result = $connect->query($sql);

    while ($row = $result->fetch_assoc()){
        if($row['Mail'] == $email){
            echo('Пользователь с такой почтой уже зарегистрирован на данном ресурсе');
            // header("Location: http://192.168.64.3/serv_10"); 
            die();
         } 
    
    }
    $sql = "INSERT INTO users VALUES (NULL, '$name', '$mail', '$password')";
    if ($connect->query($sql)){
        echo "<h1>Ваш аккаунт был успешно зарегистрирован </h1>
        <script> 
        setTimeout(() => {
            window.location.assign('http://192.168.64.3/serv_10');
        }, 2000);
        </script>
        ";
        // $name  = $_POST['name'];
        $password = md5($_POST['password']);
        session_start();
        $_SESSION['user_name'] = $name;
        $_SESSION['password'] = $password;
        
    }   
    else{
        echo "Error: ". $sql ."
        ". $connect->error;
        }
        $connect->close();
    

} else {
    echo "У вас что-то заполнено не по правилам этого форума";
    if(!preg_match($pattern_name, $name)){
        echo "что-то с имеменем";
    }
    if(!preg_match($pattern_mail, $mail)){
        echo "что-то с почтой";
    }
    if(!preg_match($pattern_password, $_POST['password'])){
        echo "<br> вы неправильно заполнили пароль!";
    }

}





