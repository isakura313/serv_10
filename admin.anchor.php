
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
                    <h3 class="title has-text-black"> Anchor</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Введите новые ccылочки</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="img/lighthouse.png">
                        </figure>
                        <form action="includes/form_anc.inc.php" method=GET>

                <div class="control">
                <label class="radio">
                <input type="radio" name="answer" value="ins">
                    Вставить
                </label>
                <label class="radio">
                <input type="radio" name="answer" value="del">
                    Удалить
                </label>
                </div>
                        <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="Id" autofocus="" name="id">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="Путь"  name="path">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="color" name="color">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea is-medium" type="text" placeholder="a_content" name="content"> </textarea>
                                </div>
                            </div>
                            </div>
                            <button class="button is-block is-info is-large is-fullwidth" type="submit">  Отправить  <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>


                </div>
            </div>
    </section>
    <script async type="text/javascript" src="../js/bulma.js"></script>


</body>
</html>