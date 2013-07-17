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
                  <input type="text" placeholder="Søg efter datasæt..." class="search-form-text" />
                  <input type="submit" value="Søg" class="button" />
                </form>
              </div>
            </div>
          </div>
          <div class="spotbox">
            <div class="spotbox--inner">
              <div class="spotbox--content-wrapper">
                <h2 class="spotbox--header"><a href="#"><i class="icon-comments-alt"></i>Seneste kommentarer</a></h2>
                <ul class="spotbox--list">
                  <li class="spotbox--list-item first">
                    <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment2"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment2">Porta ac consectetur ac</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment3"><img src="//gravatar.com/avatar/32fc47cc10bc49b47aa0644d79cf04de?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment3">Vestibulum at eros</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment4"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment4">Nibh Dolor Ornare</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item last">
                    <div class="spotbox--list-image"><a href="#comment5"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment5">Ridiculus Euismod Lorem</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="spotbox">
            <div class="spotbox--inner">
              <div class="spotbox--content-wrapper">
                <h2 class="spotbox--header"><a href="#"><i class="icon-sitemap"></i>Seneste datasæt</a></h2>
                <ul class="spotbox--list">
                  <li class="spotbox--list-item first">
                    <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment2"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment2">Porta ac consectetur ac</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment3"><img src="//gravatar.com/avatar/32fc47cc10bc49b47aa0644d79cf04de?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment3">Vestibulum at eros</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment4"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment4">Nibh Dolor Ornare</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item last">
                    <div class="spotbox--list-image"><a href="#comment5"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment5">Ridiculus Euismod Lorem</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                </ul>
              </div>
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
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header"><i class="icon-star-empty"></i>Featured datasæt</h3>
              <div class="spotbox--content">
                <h4><a href="#">3D Bygninger - Bymodel</a></h4>
                <div>3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du downloader datasættet i Chrome eller Firefox.</div>
              </div>
            </div>
          </div>
        </div>
        <div class="tertiary-content">
          <div class="spotbox">
            <div class="spotbox--inner">
              <div class="spotbox--content-wrapper">
                <h2 class="spotbox--header"><a href="#"><i class="icon-lightbulb"></i>Something else</a></h2>
                <ul class="spotbox--list">
                  <li class="spotbox--list-item first">
                    <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment1">Morbi leo risus</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment2"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment2">Porta ac consectetur ac</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment3"><img src="//gravatar.com/avatar/32fc47cc10bc49b47aa0644d79cf04de?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment3">Vestibulum at eros</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item">
                    <div class="spotbox--list-image"><a href="#comment4"><img src="//gravatar.com/avatar/3c0c3f0f2bbd8101fcc64928e7768d67?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment4">Nibh Dolor Ornare</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
                  <li class="spotbox--list-item last">
                    <div class="spotbox--list-image"><a href="#comment5"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
                    <span class="spotbox--list-link"><a href="#comment5">Ridiculus Euismod Lorem</a></span>
                    <p class="spotbox--list-posted">54 minutter 32 sekunder siden</p>
                  </li>
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