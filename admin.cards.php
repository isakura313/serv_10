
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/head.inc.php");?>
<link rel="stylesheet" href="bulma.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
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
                        <form action="includes/form.inc.php" method="POST" enctype="multipart/form-data">
                        <div class="control">
                            <label class="radio">
                             <input type="radio" name="answer" value="ins">
                                 Вставить
                                </label>
                            <label class="radio">
                                <input type="radio" name="answer" value="del">
                             Удалить
                            </label>
                        <div class="field">
                            <div class="file is-centered is-box">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="picture">
                                    <span class="file-cta">
                                    <span class="file-icon">
                                        <i class="fas fa-upload"></i>
                                    </span>
                                        <span class="file-label">
                                            Выберите картинку...
                                        </span>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="id" name="id">
                                </div>
                            </div>  

                            <div class="field">
                                <div class="control">
                                    <input class="input is-medium" type="text" placeholder="cards_h5" name="header">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <textarea class="textarea is-medium" type="text" placeholder="cards_p" name="parag"> </textarea>
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