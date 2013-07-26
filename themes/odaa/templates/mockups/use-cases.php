<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Use cases</title>
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
              <h1 class="page--title">Use cases</h1>
              <p>Her kan du se brugernes kreationer med data fra ODAA. Du kan også selv være med og oprette din egen use case.</p>
            </section>
            <div class="search-form--content-block">
              <form>
                <label class="search-form--content-block--label">Søg i use cases</label>
                <input type="text" placeholder="F.eks. på navn, brugernavn eller lign." class="search-form--content-block--input" />
                <input type="submit" class="search-form--content-block--button" value="Søg" />
              </form>
            </div>
            <div class="search--list-actions">
              <label class="search--list-actions-label">Sortér efter:</label>
              <select name="sort" class="search--actions-sort">
                <option selected="selected">Nyeste</option>
                <option>Mest kommenterede</option>
              </select>
            </div>
            <div class="use-cases--wrapper">
              <div class="use-cases--list-item-first">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
              <div class="use-cases--list-item-second">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
              <div class="use-cases--list-item-third">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
              <div class="use-cases--list-item-first">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
              <div class="use-cases--list-item-second">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
              <div class="use-cases--list-item-third last">
                <div class="use-cases--list-item-inner">
                  <h3 class="use-cases--list-header"><a href="#">Finurlige fakta</a></h3>
                  <div class="use-cases--list-image"><a href="#"><img src="http://backend.odaa.dk/sites/odaa.dk/files/vinderne_s_1.jpg" /></a></div>
                  <div class="use-cases--list-footer">
                    <a href="#" class="use-cases--list-footer-link">12 kommentarer</a>
                    <a href="#" class="use-cases--list-footer-link">Læs mere</a>
                  </div>
                </div>
              </div>
            </div>
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
              <li><a href="use-cases.php" class="menu-item active"><span>Use cases</span></a></li>
              <li><a href="forum.php" class="menu-item"><span>Forum</span></a>
              <li class="last"><a href="datasets.php" class="menu-item"><span>Datasæt</span></a>
            </ul>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-plus-sign"></i>Opret indhold</h3>
              <ul class="spotbox-menu--list">
                <li><a href="#" class="spotbox-menu--list-item">Opret forumindlæg</a></li>
                <li><a href="create-use-cases.php" class="spotbox-menu--list-item last">Opret use case</a></li>
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