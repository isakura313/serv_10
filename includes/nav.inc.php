<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/connect.inc.php');
echo ("
<header class='header'>
    <div id='logo'></div>
    <nav class='header__nav'>");
    for($i = 0; $i< 3; $i++){
        echo ("<a href='{$anchor['anchor_a'][$i]}'>{$anchor['anchor_words'][$i]}</a>");
    }
echo("</nav>
    </header>");

?>