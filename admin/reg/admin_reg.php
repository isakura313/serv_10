
<?php
// require($_SERVER["DOCUMENT_ROOT"] . "/serv_10/includes/head.inc.php");
?>
<link rel="stylesheet" href="../../bulma.css">
<body>
<?php
?>
<section class="has-background-success columns hero is-fullheight">
    <form class="column container" action="form_reg.inc.php" method=POST>

  <div class="field">
  <label class="label">Имя
  </label>
  <div class="control">
    <input class="input" type="text" placeholder="Ваше имя" name='name' id="name">
  </div>
  <p class="help is-size-6 has-text-centered"> Имя пользователя не короче 3 символов</p>
</div>

<div class="field">
  <label class="label">Email
  </label>
  <div class="control">
    <input class="input" type="email" placeholder="Ваш email" name='mail' id="mail">
  </div>
</div>

<div class="field">
  <label class="label"> Пароль
  </label>
  <div class="control">
    <input class="input" type="password" id="main_pass" placeholder="Ваш пароль" name='password' required>
  </div>
  <p class="help is-size-6 has-text-centered">Пароль, который вы введете, должен иметь как минимум одну заглавную букву</p> 
  <p class="help is-size-6 has-text-centered"> строчную, и одну цифру</p>
</div>

<div class="field">
  <label class="label"> Повтор пароля
  </label>
  <div class="control">
    <input class="input"  id = "dubl" type="password" placeholder="Повторите ваш пароль" name='password' required>
  </div>
</div>


<div class="field">
  <div class="control">
    <label class="radio">
      <input type="radio" name="question" required>
      Yes
    </label>
  </div>
</div>

  <button class="button is-link is-medium" id="sub" type="submit"> Отправить форму</button>
    </form>
</section>
 <script async type="text/javascript" src="../js/bulma.js"></script>
<script src="../../js/code.js"></script>

</body>
</html>