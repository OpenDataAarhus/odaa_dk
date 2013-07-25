<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Forum</title>
</head>
<body>
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(3); ?>
          <?php echo logged_in_menu(); ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">Forum</h1>
              <p>Her kan du oprette forumindlæg og være med i debatten på ODAA.dk. Hold en sober tone og bidrag til en konstruktiv debat!</p>
            </section>
            <div class="search-form--content-block">
              <form>
                <label class="search-form--content-block--label">Søg i forum</label>
                <input type="text" placeholder="F.eks. på navn, brugernavn eller lign." class="search-form--content-block--input" />
                <input type="submit" class="search-form--content-block--button" value="Søg" />
              </form>
            </div>
            <div class="forum--list-actions">
              <label class="forum--list-actions-label">Sortér efter:</label>
              <select name="sort" class="forum--actions-sort">
                <option selected="selected">Nyeste</option>
                <option>Mest kommenterede</option>
              </select>
            </div>
            <section class="forum--list-wrapper">
              <ul class="forum--list">
                <li class="forum--list-item">
                  <div class="forum--list-content">
                    <h3 class="forum--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                    <p>Maecenas faucibus mollis interdum. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit ...</p>
                    <div class="forum--list-meta">
                      <span class="forum--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="forum--list-author">User name</a>
                    </div>
                  </div>
                  <div class="forum--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se forumindlæg</a>
                  </div>
                </li>
                <li class="forum--list-item">
                  <div class="forum--list-content">
                    <h3 class="forum--list-header"><a href="#">Gode idéer?</a></h3>
                    <p>Jeg har tid og er klar på at lave noget sjovt med noget åben data. Nogen der har nogle gode idéer?</p>
                    <div class="forum--list-meta">
                      <span class="forum--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="forum--list-author">User name</a>
                    </div>
                  </div>
                  <div class="forum--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se forumindlæg</a>
                  </div>
                </li>
              </ul>
            </section>
            <ul class="pager">
              <li class="pager-previous first">&nbsp;</li>
              <li class="pager-current">1</li>
              <li class="pager-item"><a href="#">2</a></li>
              <li class="pager-next last"><a href="#"><i class="icon-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="secondary-content">
          <div class="sub-menu-wrapper">
            <h2 class="sub-menu-header">Community</h2>
            <ul class="sub-menu">
              <li><a href="use-cases.php" class="menu-item"><span>Use cases</span></a></li>
              <li class="last"><a href="forum.php" class="menu-item active"><span>Forum</span></a>
            </ul>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-plus-sign"></i>Opret indhold</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-angle-right"></i>Opret forumindlæg</a></li>
                <li class="spotbox-menu--list-item last"><a href="create-use-cases.php"><i class="icon-angle-right"></i>Opret use case</a></li>
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