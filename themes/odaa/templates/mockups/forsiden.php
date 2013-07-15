<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Welcome to dev.odaa.dk</title>
</head>
<body class="front">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(0); ?>
          <?php include 'snippets/secondary-menu.inc'; ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="search-spotbox">
            <div class="search-spotbox--inner">
              <h3 class="search-spotbox--header">Søg efter data</h3>
              <div class="search-spotbox--dataset-amount-wrapper">
                <div class="search-spotbox--dataset-amount">1587</div>
                <div class="search-spotbox--dataset-amount-text">datasæt</div>
              </div>
              <div class="search-spotbox--wrapper">
                <form>
                  <input type="text" placeholder="Søg på f.eks. parkering" class="search-form-text" />
                  <input type="submit" value="Søg" class="button" />
                </form>
              </div>
            </div>
          </div>
          <div class="spotbox--featured-dataset">
            <div class="spotbox--featured-dataset-inner">
              <h3 class="spotbox--featured-dataset-header">Featured datasæt</h3>

            </div>
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header">Velkommen til ODAA</h3>
              <div class="spotbox--image"><a href="#"><img src="http://www.odaa.dk/media/your_rainbow_1_small.jpg" /></a></div>
              <p>ODAA er en open data platform, hvor åbne data bliver gjort frit tilgængelige, så de er nemme for dig at finde.</p>
              <p>Vi håber, at du vil forvandle de åbne data til nye og innovative services og fortælle om det her på platformen.</p>
              <p>Du kan læse mere <a href="#">Om ODAA her</a>.</p>
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