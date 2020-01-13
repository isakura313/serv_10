<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/config/connect.inc.php');

// $cards_p;
// 2, 5, 8, 11, 

// -1+3
$j = -1;
echo("
<div class='cards'>
    <div class='card_row'>");
    for($i = 0; $i<count($cards['cards_icon']); $i++){
        echo ("
        <div class='card'>
            <div class='card__icon'> 
                <img src={$cards['cards_icon'][$i]} >
            </div>
                     <h5 class='card__h5'> {$cards['cards_h5'][$i]}</h5>
                     <div class='card__line'></div>
                     <p class='card__p'>{$cards['cards_p'][$i]} </p>
                 </div> ");
        if($i==2){
        echo ("</div>");
        echo("<div class='card_row'>");
            }
        else if($i%3 ==2){
            echo ("</div>");
            echo("<div class='card_row'>");
        }
        // else if($i==8){
        //     echo ("</div>");
        //     echo("<div class='card_row'>");
        // }
        }
        echo ("</div> </div>");

?>