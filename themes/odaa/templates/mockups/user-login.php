<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>User login</title>
</head>
<body class="user">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(5); ?>
          <?php echo secondary_menu(0); ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">User login</h1>
              <form>
                <div class="user-login--username-wrapper">
                  <label class="user-login--label">Username</label>
                  <input type="text" />
                </div>
                <div class="user-login--password-wrapper">
                  <label class="user-login--label">Kodeord</label>
                  <input type="Password" />
                </div>
                <div class="user-login--actions">
                  <a href="user-password.php" class="user-login--forgot-password">Glemt kodeord?</a>
                  <a href="openid-login.php" class="user-login--openid">Log in using OpenID</a>
                  <input type="submit" value="Log ind" class="user-login--submit" />
                </div>
              </form>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header">Brug for hjælp?</h3>
              <div class="spotbox--content">
                <p>Har du problemer med at logge ind eller oprette dig som bruger? Send os en besked så hjælper vi!</p>
                <p><a href="#">Kontakt os</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="site-footer">
      <section class="footer-wrapper">
        <div class="footer-inner">
          <?php include 'snippets/newsletter-signup.inc'; ?>
          <?php include 'snippets/award-logos.inc'; ?>
          <?php include 'snippets/poweredby.inc'; ?>
        </div>
      </section>
    </footer>
  </div>
</body>
</html>