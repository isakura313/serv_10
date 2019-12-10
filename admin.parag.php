
<link rel="stylesheet" href="bulma.css">
<body>
<section class="has-background-success columns">
   
            <div class="container has-text-centered">
                <div class="column  ">
                    <h3 class="title has-text-black">Paragrap</h3>
                    <hr class="login-hr">
                    <p class="subtitle has-text-black">Введите контент, каждый параграф отдельно </p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="img/moscow.png" class="is-size-6">
                        </figure>
                        <form action="includes/form_p.inc.php" method=GET>
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
                                    <input class="input is-medium" type="text" placeholder="id" name="id">
                                </div>
                            </div>  
                        
                            <div class="field">
                                <div class="control">

                                    <textarea  rows = 20 class="textarea is-medium" type="text" placeholder="cards_p" name="parag_content"> </textarea>
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