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
          <?php echo secondary_menu(false); ?>
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
            <form>
              <div class="search-form--content-block">
                <label class="search-form--content-block--label">Søg i datasæt</label>
                <input type="text" placeholder="F.eks. parkering, bygninger eller lignende" class="search-form--content-block--input" />
                <input type="submit" class="search-form--content-block--button" value="Søg" />
              </div>
              <div class="search--list-actions">
                <select name="sort" class="search--actions-sort">
                  <option value="score desc, metadata_modified desc">Relevance</option>
                  <option selected="selected" value="title_string asc">Name Ascending</option>
                  <option value="title_string desc">Name Descending</option>
                  <option value="metadata_modified desc">Sidst modificeret</option>
                </select>
              </div>
            </form>
            <section class="dataset--list-wrapper">
              <ul class="dataset--list">
                <li class="dataset--list-item">
                  <div class="dataset--list-content">
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                    <h3 class="dataset--list-header"><a href="dataset.php">Bålpladser i Aarhus</a></h3>
                    3D bygninger for den indre del af Aarhus By (ca. indenfor Ringgaden). Data er på DWG-formatet og er en bygningstrådmodel. Data fylder ca. 50 MB. Vi anbefaler, at du...
                  </div>
                  <div class="dataset--list-footer">
                    <a href="#" class="dataset--list-footer-link">12 kommentarer</a>
                    <a href="dataset.php" class="dataset--list-footer-link">Se datasættet</a>
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
                <li class="pager-next last"><a href="#">»</a></li>
              </ul>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-filter"></i>Tags</h3>
              <p class="spotbox-menu--list-remove-all"><a href="#"><i class="icon-remove"></i>Fjern alle</a></p>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item first"><a href="#" class="active"><i class="icon-check"></i>Aarhus Kommune (15)</a></li>
                <li class="spotbox-menu--list-item"><a href="#" class="active"><i class="icon-check"></i>Aarhus Kommune (10)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>vandværker (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>vandindvinding (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>toiletter (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>toilet (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>skove (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>parker (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>p-pladser (1)</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-check-empty"></i>p-pladser (1)</a></li>
              </ul>
              <p class="spotbox-menu--list-show-more"><a href="#">Vis flere tags</a></p>
            </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-filter"></i>Formater</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item first"><a href="#"><i class="icon-check-empty"></i>PDF (23)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>KML (17)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>xlsx (8)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>HTML (6)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>XML (5)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>CSV (3)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>dwg (2)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>docx (2)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>XLS (2)</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-check-empty"></i>TXT (2)</a></li>
              </ul>
              <p class="spotbox-menu--list-show-more"><a href="#">Vis flere formater</a></p>
            </div>
          </div>
          <div class="spotbox-menu">
            <div class="spotbox-menu--inner">
              <h3 class="spotbox-menu--header"><i class="icon-filter"></i>Grupper</h3>
              <ul class="spotbox-menu--list">
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>Aarhus Kommune (15)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>Aarhus Kommune (10)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>vandværker (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>vandindvinding (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>toiletter (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>toilet (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>skove (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>parker (1)</a></li>
                <li class="spotbox-menu--list-item"><a href="#"><i class="icon-check-empty"></i>p-pladser (1)</a></li>
                <li class="spotbox-menu--list-item last"><a href="#"><i class="icon-check-empty"></i>p-pladser (1)</a></li>
              </ul>
              <p class="spotbox-menu--list-show-more"><a href="#">Vis flere grupper</a></p>
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