<?php

require('function.php');

?>
  <?php
  require('head.php');
  ?>

  <body class="page-signup page-1colum">

    <?php
    require('header.php');
    ?>

   <div id="main">

    <section id="user" class="site-width">
      <h2 class="title">ユーザー登録</h2>

    <form>
      <div class="form-group">
        <label>E-mail<span class="help-block"></span>
          <input type="text" name="email" placeholder="Email" class="valid-email">
        </label>
      </div>

      <div class="form-group">
        <label>name<span class="help-block"></span>
          <input type="text" name="name" placeholder="name" class="valid-text">
        </label>
      </div>

      <div class="form-group">
        <label>password<span class="help-block"></span>
          <input type="password" name="pass" placeholder="password" class="valid-password">
        </label>
      </div>

      <div class="form-group">
        <label>password（再入力）<span class="help-block"></span>
          <input type="password" name="pass-retype" placeholder="password(再入力)" class="valid-password">
　      </label>
      </div>

      <input type="submit" value="登録">

    </form>

    </section>

  </div>
 
<?php
require('footer.php');
?>
