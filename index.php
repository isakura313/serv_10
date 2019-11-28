<?php
require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/head.inc.php");
?>
<body>
 <?php
require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/nav.inc.php");
    ?>

<aside class="aside">

    <a href="#main" class="aside__a">главная</a>
    <a href="#info" class="aside__a"> о нас</a>
    <a href="#cont" class="aside__a"> контакты</a>
</aside>
<main class="main" id="main">
    <?php
    $privet = "Инновации в путешествии " . date('j F') ."\n";
        echo("<h3 class='main__h3'>{$privet}</h3>");
    ?>
    <div class="main__btn_attract">
        присоединяйся
    </div>
    <div class="soc_wrap soc_wrap__right">
    <a href="https://vk.com "><div class="soc_wrap__icon soc_wrap__vk soc_wrap__icon__big" ></div></a>
    <a href="https://facebook.com"> <div class="soc_wrap__icon soc_wrap__face soc_wrap__icon__big"></div></a> 
    <a href="https://instagram.com"> <div class="soc_wrap__icon soc_wrap__inst soc_wrap__icon__big"></div></a>
    </div>
</main>
    <div class="info_panel" id="info">
        <h3 class="info_panel__h3">Путешествуй красиво! Блог в фотографиях!</h3>
<?php
require($_SERVER['DOCUMENT_ROOT'] .'/serv_10/includes/parag.inc.php');
?>
    <div class="info_panel__h3">Причины воспользоваться нашими турами:</div>
        <ul class="info_panel__ul">
            <li> Классные лежаки </li>
            <li> Вежливые гиды </li>
            <li> Вкусные кокосы на берегу </li>
            <li> Общая позитивная атмосфера </li>
        </ul>
    </div>
<?php
 require($_SERVER['DOCUMENT_ROOT'] . "/serv_10/includes/cards.inc.php");
?>




    <footer class="footer" id="cont">
        <div class="footer_info">
            <p class="footer_info__p footer_info__big footer_info__yellow">Мы рядом с вами  </p>
            <p class="footer_info__p footer_info__yellow"> Москва, ул. Комсомола, 12 </p>
            <p class="footer_info__p"> Тел(8555-13-13) </p>
            <p class="footer_info__p">Email:travel@mytravel.ru</p>
            <p class="footer_info__p">Часы работы: пн-пт 10-13  </p>
            <div class="soc_wrap">
                <a href="https://vk.com "><div class="soc_wrap__icon soc_wrap__vk soc_wrap__icon__small" ></div></a>
                <a href="https://facebook.com"> <div class="soc_wrap__icon soc_wrap__face soc_wrap__icon__small"></div></a> 
                <a href="https://instagram.com"> <div class="soc_wrap__icon soc_wrap__inst soc_wrap__icon__small"></div></a>
                </div>
        </div>
        <div class="footer__logo"></div>
        <div class="footer__dire">
            <p class="footer_info__p footer__info__p__right">Путешествия по России</p>
            <p class="footer_info__p footer__info__p__right">Путешествия по Аргентине</p>
            <p class="footer_info__p footer__info__p__right">Путешествия по Америке</p>
            <p class="footer_info__p footer__info__p__right">Путешествия по Германии</p>
            <p class="footer_info__p footer__info__p__right">Путешествия по Австрии</p>
            <p class="footer_info__p footer__info__p__right">Путешествия по Украине</p>

        </div>
    </footer>
</body>
</html>