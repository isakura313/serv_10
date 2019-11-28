
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/head.inc.php");?>
<link rel="stylesheet" href="bulma.css">
<body>
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/nav.inc.php");
?>
 <section class="has-background-success columns">
   
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Cards</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Введите новые карточки</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="img/kangaroo.png">
                        </figure>
                        <form action="form.inc.php" method=GET>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="Путь картинки" autofocus="" name="path">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="cards_h5" name="header">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="cards_p" name="parag">
                                </div>
                            </div>
                            </div>
                            <button class="button is-block is-info is-large is-fullwidth" type="submit">  Отправить  <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-grey">
                        <a href="../">Sign Up</a> &nbsp;·&nbsp;
                    </p>
                </div>
            </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>


</body>
</html>