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
          <?php echo main_menu(2); ?>
          <?php include 'snippets/secondary-menu.inc'; ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">Community</h1>
              <p>Open Source er fedt, åben data er fedt! Velkommen til ODAAs Community - fedt du kiggede forbi! :)</p>
            </section>
            <section class="community--wrapper">
              <div class="search-form--content-block">
                <form>
                  <label class="search-form--content-block--label">Søg i communitiet</label>
                  <input type="text" placeholder="F.eks. på navn på datasæt, brugernavn eller lign." class="search-form--content-block--input" />
                  <input type="submit" class="search-form--content-block--button" value="Søg" />
                </form>
              </div>
              <div class="list--actions">
                <a href="#" class="list--action-sort-latest active"><i class="icon-ok"></i>Sortér: Nyeste</a>
                <a href="#" class="list--action-sort-hot"><i class="icon-comments-alt"></i>Sortér: Mest kommenterede</a>
                <a href="#" class="list--action-create"><i class="icon-plus"></i>Opret indlæg</a>
              </div>
              <section class="community--list-wrapper">
                <span class="community--list-heading">Filter:</span><span class="community--empty-text">Ingen</span>
                <ul class="community--list">
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-file"></i></a></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">12 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-comment"></i></a></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Gode idéer?</a></h3>
                      <p>Jeg har tid og er klar på at lave noget sjovt med noget åben data. Nogen der har nogle gode idéer?</p>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">0 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-file"></i></a></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">12 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-user"></i></a></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Proof of cencept på data fra skraldespande</a></h3>
                      <p>Donec ullamcorper nulla non metus auctor fringilla. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">12 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-comment"></i></a></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Gode idéer?</a></h3>
                      <p>Jeg har tid og er klar på at lave noget sjovt med noget åben data. Nogen der har nogle gode idéer?</p>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">0 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                  <li class="community--list-item">
                    <div class="community--list-icon"><a href="#"><i class="icon-file"></a></i></div>
                    <div class="community--list-content">
                      <h3 class="community--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                      <div class="community--list-meta">
                        <span class="community--list-posted">20. juli 2013 @ 14:57</span>|<a href="#" class="community--list-author">User name</a>
                      </div>
                    </div>
                    <div class="community--list-footer">
                      <a href="#" class="community--list-comments-link">12 kommentarer</a>|<a href="#" class="community--list-read-more">Læs mere</a>
                    </div>
                  </li>
                </ul>
                <ul class="pager">
                  <li class="pager-previous first">&nbsp;</li>
                  <li class="pager-current">1</li>
                  <li class="pager-item"><a href="#">2</a></li>
                  <li class="pager-next last"><a href="#"><i class="icon-angle-right"></i></a></li>
                </ul>
              </section>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <div class="community--filter">
            <div class="community--filter-inner">
              <h3 class="community--filter-header"><i class="icon-filter"></i>Filtrér</h3>
              <ul class="community--filter-list">
                <li class="community--filter-list-item first"><a href="community.php" class="active"><i class="icon-check"></i>Alle</a></li>
                <li class="community--filter-list-item first"><a href="community-forum.php" class="active"><i class="icon-check"></i>Forum</a></li>
                <li class="community--filter-list-item"><a href="community-use-cases.php" class="active"><i class="icon-check"></i>Use cases</a></li>
                <li class="community--filter-list-item last"><a href="community-dataset.php" class="active"><i class="icon-check"></i>Datasæt</a></li>
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