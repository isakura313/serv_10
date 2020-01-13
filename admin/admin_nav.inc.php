<div class="columns">
<nav class="navbar" role="navigation" aria-label="dropdown navigation">
<?php
// session_start();
echo("<div class='navbar-item'> {$_SESSION['user_name']}</div>");
?>

  <div class="navbar-item has-dropdown is-hoverable">
    <a class="navbar-link">
      Страницы
    </a>
    <div class="navbar-dropdown">
      <a class="navbar-item" href="/serv_10/admin.parag.php">
        Параграфы
      </a>
      <a class="navbar-item" href="/serv_10/admin.cards.php">
         Карточки
      </a>
      <a class="navbar-item" href="/serv_10/admin.anchor.php">
        Ссылочки
      </a>
      <a class="navbar-item" href="/serv_10">
        Домой
      </a>
      <hr class="navbar-divider">

    </div>
  </div>
</nav>

</div>