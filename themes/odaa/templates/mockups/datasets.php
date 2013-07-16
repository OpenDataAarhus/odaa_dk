<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Datasæt</title>
</head>
<body class="left-sidebar">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(1); ?>
          <?php include 'snippets/secondary-menu.inc'; ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">Find datasæt</h1>
            </section>
            <div class="search-form--content-block">
              <form>
                <label class="search-form--content-block--label">Søg i datasæt</label>
                <input type="text" placeholder="F.eks. parkering, bygninger eller lignende" class="search-form--content-block--input" />
                <input type="submit" class="search-form--content-block--button" value="Søg" />
              </form>
            </div>
            <div class="dataset--list-actions">
              <select name="sort" class="dataset--actions-sort">
                <option value="score desc, metadata_modified desc">Relevance</option>
                <option selected="selected" value="title_string asc">Name Ascending</option>
                <option value="title_string desc">Name Descending</option>
                <option value="metadata_modified desc">Sidst modificeret</option>
              </select>
            </div>
            <section class="dataset--list-wrapper">
              <ul class="dataset--list">
                <li class="dataset--list-item">
                  <div class="dataset--list-content">
                    <h3 class="dataset--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-comments-link">12 kommentarer</a>|<a href="#" class="dataset--list-read-more">Se datasættet</a>
                    <ul class="dataset--list-tags">
                      <li class="dataset--list-tag-item">
                        <a data-format="dwg" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">dwg</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="pdf" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">PDF</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="csv" class="label dataset--list-tag" href="/dataset/aarhus-vand-nedbor">CSV</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="dataset--list-item">
                  <div class="dataset--list-content">
                    <h3 class="dataset--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-comments-link">12 kommentarer</a>|<a href="#" class="dataset--list-read-more">Se datasættet</a>
                    <ul class="dataset--list-tags">
                      <li class="dataset--list-tag-item">
                        <a data-format="dwg" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">dwg</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="pdf" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">PDF</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="csv" class="label dataset--list-tag" href="/dataset/aarhus-vand-nedbor">CSV</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="dataset--list-item">
                  <div class="dataset--list-content">
                    <h3 class="dataset--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-comments-link">12 kommentarer</a>|<a href="#" class="dataset--list-read-more">Se datasættet</a>
                    <ul class="dataset--list-tags">
                      <li class="dataset--list-tag-item">
                        <a data-format="dwg" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">dwg</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="pdf" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">PDF</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="csv" class="label dataset--list-tag" href="/dataset/aarhus-vand-nedbor">CSV</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="dataset--list-item">
                  <div class="dataset--list-content">
                    <h3 class="dataset--list-header"><a href="#">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-comments-link">12 kommentarer</a>|<a href="#" class="dataset--list-read-more">Se datasættet</a>
                    <ul class="dataset--list-tags">
                      <li class="dataset--list-tag-item">
                        <a data-format="dwg" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">dwg</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="pdf" class="label dataset--list-tag" href="/dataset/3d-bygninger-bymodel">PDF</a>
                      </li>
                      <li class="dataset--list-tag-item">
                        <a data-format="csv" class="label dataset--list-tag" href="/dataset/aarhus-vand-nedbor">CSV</a>
                      </li>
                    </ul>
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
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header">Aarhus Kommune</h3>
              <div class="spotbox--image"><a href="/organization/aarhus-kommune"><img width="200" alt="aarhus-kommune" src="http://www.aarhus.dk/~/media/Subsites/AAK-Designguide/Logovarianter/Logo-med-tekst/Dansk/Kompakt-version/PNG/AAK-02-venstre-70.png"></a></div>
              <p class="spotbox--content-empty">There is no description for this organization</p>
            </div>
          </div>
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header"><i class="icon-folder-open"></i>Grupper</h3>
              <ul class="spotbox--list">
                <li class="spotbox--list-item last">
                  <a href="/group/transport-og-infrastruktur">Transport og infrastruktur</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header"><i class="icon-medium icon-share"></i>Social</h3>
              <ul class="spotbox--list">
                <li class="spotbox--list-item first"><a target="_blank" href="https://plus.google.com/share?url=http://www.odaa.dk/dataset/parkering"><i class="icon-google-plus-sign"></i> Google+</a></li>
                <li class="spotbox--list-item"><a target="_blank" href="https://twitter.com/share?url=http://www.odaa.dk/dataset/parkering"><i class="icon-twitter-sign"></i> Twitter</a></li>
                <li class="spotbox--list-item last"><a target="_blank" href="https://www.facebook.com/sharer.php?u=http://www.odaa.dk/dataset/parkering"><i class="icon-facebook-sign"></i> Facebook</a></li>
              </ul>
            </div>
          </div>
          <div class="spotbox">
            <div class="spotbox--inner">
              <h3 class="spotbox--header"><i class="icon-medium icon-lock"></i> Licens</h3>
              <p>
                <span property="dc:rights">Andet (Open)</span>
                <a title="Dette datasæt opfylder Open Definition." href="http://opendefinition.org/okd/"><img alt="[Open Data]" src="http://assets.okfn.org/images/ok_buttons/od_80x15_blue.png" class="open-data"></a>
              </p>
            </div>
          </div>
          <div class="twitter-widget">
            <a class="twitter-timeline"  href="https://twitter.com/OpenDataAarhus" height="380" data-widget-id="319794378895925248" data-chrome="nofooter">Tweets by @OpenDataAarhus</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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