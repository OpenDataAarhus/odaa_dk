<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Welcome to dev.odaa.dk | dev.odaa.dk</title>
</head>
<body class="left-sidebar">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(3); ?>
          <?php echo secondary_menu(false); ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">Mine use cases</h1>
              <p>Her kan du se en oversigt over dine use cases.</p>
            </section>
            <section class="use-cases--list-wrapper">
              <ul class="use-cases--list">
                <li class="use-cases--list-item">
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-content">
                    <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                    <p>Konkurrencen om en app bygget på Finurlige Faktas datasæt er nu afsluttet. Ved det fælles IT-forum og ODAA arrangement d. 25. juni på Aarhus Rådhus, blev det vindende forslag præsenteret.</p>
                    <div class="use-cases--list-meta">
                      <span class="use-cases--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="use-cases--list-author">User name</a>
                    </div>
                  </div>
                  <div class="use-cases--list-footer">
                    <a class="use-cases--list-footer-link" href="#"><i class="icon-edit"></i>Redigér</a>
                    <a class="use-cases--list-footer-link" href="#"><i class="icon-remove"></i>Slet</a>
                  </div>
                </li>
                <li class="use-cases--list-item">
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-content">
                    <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                    <p>Konkurrencen om en app bygget på Finurlige Faktas datasæt er nu afsluttet. Ved det fælles IT-forum og ODAA arrangement d. 25. juni på Aarhus Rådhus, blev det vindende forslag præsenteret.</p>
                    <div class="use-cases--list-meta">
                      <span class="use-cases--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="use-cases--list-author">User name</a>
                    </div>
                  </div>
                  <div class="use-cases--list-footer">
                    <a class="use-cases--list-footer-link" href="#"><i class="icon-edit"></i>Redigér</a>
                    <a class="use-cases--list-footer-link" href="#"><i class="icon-remove"></i>Slet</a>
                  </div>
                </li>
              </ul>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-user"></i>Brugermenu</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-angle-right"></i>Se brugerprofil</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-angle-right"></i>Rediger brugerprofil</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-power-off"></i>Log ud</a></li>
              </ul>
            </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-file-text-alt"></i>Mit indhold</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-angle-right"></i>Mine forumindlæg</a></li>
                <li class="spotbox-menu--list-item"><a href="my-use-cases.php" class="active"><i class="icon-angle-right"></i>Mine use cases</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-angle-right"></i>Mine datasæt</a></li>
              </ul>
            </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-plus-sign"></i>Opret indhold</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-plus"></i>Opret forumindlæg</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-plus"></i>Opret use case</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-plus"></i>Opret datasæt</a></li>
              </ul>
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