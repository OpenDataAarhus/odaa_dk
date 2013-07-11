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
              <h1 class="page--title"> Bevaringsværdige bygninger i Aarhus Kommune</h1>
              <p>Datasættet beskriver de bygninger, der er registreret som bevaringsværdige i kommuneatlas (http://gis.aarhus.dk/kommuneatlas/) Mere om vurdering af bevaringsværdi efter SAVE-metoden: https://www.kulturarv.dk/fbb/bevaringsvaerdier.htm</p>
              <p>Der er bl.a. angivet adresse med vejnavn/vejkode og husnummer. Ved hjælp af datasættet "Koordinatsætning af Aarhus adresser" kan man fange koordinater, så bygningerne kan placeres i et kort.</p>
            </section>
            <section class="dataset--data-resources">
              <h2 class="section-title">Data and Resources</h2>
              <ul class="dataset--list">
                <li class="dataset--list-item">
                  <a class="dataset--list-item-heading" title="savebygnings_view.xml" href="/dataset/bevaringsvaerdige-bygninger-i-aarhus-kommune/resource/127751d2-8a48-4c57-a206-e03b4330f317">
                    savebygnings_view.xml
                    <span data-format="xml" property="dc:format" class="ckan--format-label">XML</span>
                  </a>
                  <p class="dataset--description"><span class="empty">No description for this resource</span></p>
                  <a class="button" href="/dataset/bevaringsvaerdige-bygninger-i-aarhus-kommune/resource/127751d2-8a48-4c57-a206-e03b4330f317"><i class="icon-bar-chart"></i>Preview/eksempel</a>
                  <a class="button" href="http://www.odaa.dk/storage/f/2013-02-05T10%3A43%3A38.516Z/savebygnings-view.xml"><i class="icon-download"></i>Download</a>
                </li>
              </ul>
            </section>
          </div>
        </div>
        <div class="secondary-content">
          <?php include 'snippets/sub-menu.inc'; ?>
        </div>
        <div class="tertiary-content">
          Tertiary content
        </div>
      </div>
    </div>
  </div>
</body>
</html>