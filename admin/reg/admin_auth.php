
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/head.inc.php");
// print_r($_COOKIE);
// echo(key($_COOKIE));
?>
<link rel="stylesheet" href="../../bulma.css">
<body>
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/nav.inc.php");
?>
<section class="has-background-success columns hero is-fullheight">
    <form class="column container" action="form_auth.inc.php" method=POST>

  <div class="field">
  <label class="label">Имя
  </label>
  <div class="control">
    <input class="input" type="text" placeholder="Имя вашего пользователя, которое вам выдал админ при регистрации на ресурсе" name='name' required>
  </div>
</div>

    <div class="field">
  <label class="label"> Пароль
  </label>
  <div class="control">
    <input class="input" type="password" placeholder="Ваш пароль" name='password' required>
  </div>
</div>

  <button class="button is-link is-medium" type="submit"> Отправить форму</button>
    </form>
</section>
 <script async type="text/javascript" src="../js/bulma.js"></script>


</body>
</html>