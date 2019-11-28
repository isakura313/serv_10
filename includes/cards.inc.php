
<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/connect.inc.php');

// $cards_p;

echo("
<div class='cards'>
    <div class='card_row'>");
    for($i = 0; $i<count($cards['cards_icon']); $i++){
        echo ("
        <div class='card'>
        <div class='card__icon {$cards['cards_icon'][$i]}  '></div>
                     <h5 class='card__h5'> {$cards['cards_h5'][$i]}</h5>
                     <div class='card__line'></div>
                     <p class='card__p'>{$cards['cards_p'][$i]} </p>
                 </div> ");
        if($i==2){
        echo ("</div>");
        echo("<div class='card_row'>");
            }
        }
        echo ("</div> </div>");

?>