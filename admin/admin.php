<!--  -->
<?php
// print_r($_COOKIE);
// print_r($_REQUEST);
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/config.inc.php');
// require($_SERVER['DOCUMENT_ROOT'] . '/serv_10/includes/head.inc.php');
// делаем запрос к бд
// если имя пользователя и пароль из куков сходятся с бд данными
// показать контент
// в ином случае нужно послать его на регистрацию
// $name = key($_COOKIE);
session_start();
$name = $_SESSION['user_name'];
$password = $_SESSION['password'];
$sql = "SELECT * FROM users WHERE Name = '$name'";
$result = $connect->query($sql);
$flag = false;
while ($row = $result->fetch_assoc()){
    if($row['Password'] == $password){
        $flag = true;
        require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/admin/admin_nav.inc.php');
       echo("<link rel='stylesheet' href='../bulma.css'> <body>

<section class='has-background-success columns hero is-fullheight'>
    <div class='column'>
        <h1 class ='is-size-3'> Добро пожаловать в нашу CMS систему</h1>
        <h3 class='label is-size-4'> Hello {$name} </h3>
        <a href='../admin.parag.php'>
            <button class='button is-size-4'> Отредактировать параграфы</button>
        </a>
        <a href='../admin.cards.php'>
            <button class='button is-size-4'> Отредактировать карточки</button>
        </a>
        <a href='../admin.anchor.php'>
            <button class='button is-size-4'> Отредактировать ссылочки</button>
        </a>
    </div>
    <form action='reg/logout.inc.php' method=GET>
    <div class='field'>
        <div class='control'>
            <button type='submit' class='button is-primary is-large'>Выйти отсюда</button>
        </div>
        </div>
        </form>
</section>

 <script async type='text/javascript' src='../js/bulma.js'></script>


</body>
</html>");

     
}
}
if(!$flag){
header('Location:/serv_10/admin/reg/admin_auth.php'); 
}
?>
