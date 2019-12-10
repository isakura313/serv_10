<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/connect.inc.php');
echo ("
<header class='header'>
    <div id='logo'></div>
        <nav class='header__nav'>");
        echo count($anchors);
            for($i = 0; $i < count($anchors['Path']); $i++){
                echo ("<a href='{$anchors['Path'][$i]}' style='color:{$anchors['Color'][$i]}'>
                    {$anchors['Content'][$i]}</a>");
            }
echo("</nav>
    </header>");

?>