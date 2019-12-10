<?php

require($_SERVER["DOCUMENT_ROOT"] .'/serv_10/includes/config.inc.php');
// здесь у нас получаются данные из нашей БД! 
if ($result = $connect->query("SELECT * FROM cards")) {
    // получить в виде ассоциативного массива данные из бд
        $card_db = ['cards_icon'=>[], 'cards_h5'=>[],  'cards_p'=>[]];
        while ($row = $result->fetch_assoc()) {
            array_push($card_db['cards_icon'], $row["Cards_icon"]);
            array_push($card_db['cards_h5'], $row["Cards_h5"]);
            array_push($card_db['cards_p'], $row["Cards_p"]);
        }

        $result->close();
    }




$cards = $card_db;


$anchors = [
// 'Path' => ['#main', '#info', '#cont'],
// 'Color'=> ['red', 'green', 'blue'],
// 'Content' => ['главная', 'о нас', 'контакты']
];

if ($result = $connect->query("SELECT * FROM anchor")) {
    // получить в виде ассоциативного массива данные из бд
        $anchor_db = ['Path'=>[], 'Color'=>[],  'Content'=>[]];
        while ($row = $result->fetch_assoc()) {
            array_push($anchor_db['Path'], $row["Path"]);
            array_push($anchor_db['Color'], $row["Color"]);
            array_push($anchor_db['Content'], $row["Content"]);
        }

        $result->close();
    }

$anchors = $anchor_db;



if ($result = $connect->query("SELECT * FROM parag")) {
    // получить в виде  массива данные из бд
        $parag_db = ['id'=>[], 'p'=>[]];
        while ($row = $result->fetch_assoc()) {
            array_push($parag_db['id'], $row["Id"]);
            array_push($parag_db['p'], $row["p"]);
        }
        $result->close();
    }

$parag = $parag_db;