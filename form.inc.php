<?php
require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/config.inc.php');


echo ($_GET['path']);
echo ($_GET['header']);
echo ($_GET['parag']);


$result = $connect->query("INSERT INTO  cards VALUES( )");


        $result->close();
    


?>