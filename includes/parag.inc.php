<?php
require($_SERVER['DOCUMENT_ROOT'] .'/serv_10/includes/connect.inc.php');
for($i= 0 ; $i < count($parag); $i++){
    echo ("<p class='info_panel__p'> {$parag[$i]} </p>

");
}


?>