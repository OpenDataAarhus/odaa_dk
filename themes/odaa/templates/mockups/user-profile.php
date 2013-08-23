<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>User profile</title>
</head>
<body class="user-profile">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(5); ?>
          <?php echo logged_in_menu(0); ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="user-profile--content-wrapper">
            <section class="user-profile--primary-content">
              <div class="user-profile--header-wrapper">
                <div class="user-profile--image"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=75&amp;d=identicon"></div>
                <h1 class="user-profile--title">Bruger navn</h1>
              </div>
              <section class="user-profile--info">
                <h3>Dine informationer</h3>
                <p><strong>Navn:</strong> Ornare Euismod</p>
                <p><strong>E-mail:</strong> mail@example.com</p>
                <p><strong>Medlem i:</strong> 2 uger 2 dage</p>
                <div class="user-profile--actions">
                  <a href="#" class="button">Redigér profil</a>
                </div>
              </section>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header">Bruger navn</h3>
              <ul class="spotbox-list">
                <li class=""><a class="spotbox-menu--list-item" href="#">Min konto</a></li>
                <li class=""><a class="spotbox-menu--list-item" href="#">Rediger profil</a></li>
                <li class="last"><a class="spotbox-menu--list-item" href="#">Log ud</a></li>
              </ul>
            </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox--inner">
            <h2 class="spotbox-menu--header"><i class="icon-plus-sign"></i>User actions</h2>
            <ul class="spotbox--list"><li class="first leaf menu-mlid-527"><a href="/node/add/forum-topic" title="" class="spotbox-menu--list-item">Opret forumindlæg</a></li>
            <li class="last leaf menu-mlid-528"><a href="/node/add/use-case" title="" class="spotbox-menu--list-item">Opret use case</a></li>
            </ul><a id="context-block-menu_block-5" class="context-block editable edit-user_sub"></a>  </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-file-text-alt"></i>Mit indhold</h3>
              <ul class="spotbox-menu--list">
                <li class=""><a class="spotbox-menu--list-item" href="#">Mine forumindlæg</a></li>
                <li class="last"><a class="spotbox-menu--list-item" href="my-use-cases.php">Mine use cases</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="tertiary-content">
          <div class="spotbox">
              <div class="spotbox--inner">
                <h2 class="spotbox--header"><a href="#"><i class="icon-time"></i>User activity</a></h2>
                <ul class="spotbox--list">
                  <li class="spotbox--list-item first">
                    <span class="spotbox--list-link">Nyt forumindlæg: <a href="#comment1">Morbi leo risus</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment2">Porta ac consectetur ac</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Ny use case: <a href="#comment3">Vestibulum at eros</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment4">Nibh Dolor Ornare</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item last">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment5">Ridiculus Euismod Lorem</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <p class="spotbox--list-show-more"><a href="#"><i class="icon-angle-right"></i>Se mere</a></p>
                </ul>
              </div>
            </div>
            <div class="spotbox">
              <div class="spotbox--inner">
                <h2 class="spotbox--header"><a href="#"><i class="icon-time"></i>Node activity</a></h2>
                <ul class="spotbox--list">
                  <li class="spotbox--list-item first">
                    <span class="spotbox--list-link">Nyt forumindlæg: <a href="#comment1">Morbi leo risus</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment2">Porta ac consectetur ac</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Ny use case: <a href="#comment3">Vestibulum at eros</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment4">Nibh Dolor Ornare</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item last">
                    <span class="spotbox--list-link">Kommenterede: <a href="#comment5">Ridiculus Euismod Lorem</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <p class="spotbox--list-show-more"><a href="#"><i class="icon-angle-right"></i>Se mere</a></p>
                </ul>
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