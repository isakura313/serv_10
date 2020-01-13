<?php

require($_SERVER['DOCUMENT_ROOT'] .'/serv_10/config/connect.inc.php');


for($i= 0 ; $i < count($parag['id']); $i++){
    echo ("<p id='{$parag['id'][$i]}' class='info_panel__p'> {$parag['p'][$i]} </p>

");
}


?>