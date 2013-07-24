<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>User login</title>
</head>
<body>
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(5); ?>
          <?php include 'snippets/secondary-menu.inc'; ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">User register</h1>
              <form>
                <div class="user-login--username-wrapper">
                  <label class="user-login--label">Username</label>
                  <input type="text" />
                  <div class="description">Spaces are allowed; punctuation is not allowed except for periods, hyphens, apostrophes, and underscores.</div>
                </div>
                <div class="user-login--password-wrapper">
                  <label class="user-login--label">E-mail address</label>
                  <input type="text" />
                  <div class="description">A valid e-mail address. All e-mails from the system will be sent to this address. The e-mail address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by e-mail.</div>
                </div>
                <div class="user-login--password-wrapper">
                  <label class="user-login--label">Password</label>
                  <input type="password" />
                </div>
                <div class="user-login--password-wrapper">
                  <label class="user-login--label">Confirm password</label>
                  <input type="password" />
                </div>
                <div class="user-login--actions">
                  <input type="submit" value="Create new account" class="user-login--submit" />
                </div>
              </form>
            </section>
          </div>
        </div>
        <div class="secondary-content">
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