<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Om ODAA</title>
</head>
<body class="left-sidebar">
  <div id="page" class="page">
    <header class="site-header">
      <section class="header-wrapper">
        <div class="header-inner">
          <?php include 'snippets/logo.inc'; ?>
          <?php include 'snippets/search-form.inc'; ?>
          <?php echo main_menu(5); ?>
          <?php include 'snippets/secondary-menu.inc'; ?>
        </div>
      </section>
    </header>
    <div class="content-wrapper">
      <div class="content-inner">
        <div class="primary-content">
          <div class="page--content-wrapper">
            <section class="page--content">
              <h1 class="page--title">Open Data Aarhus (ODAA)</h1>
              <p>Det overordnede formål med www.odaa.dk er at gøre data frit tilgængelige for at understøtte produktivitet og innovativ udvikling ved højere grad af udnyttelse af data. Udviklere, iværksættere, virksomheder, institutioner, borgere m.fl. får mulighed for nemt at kunne tilgå åbne data og forvandle dem til nye services/applikationer, der kan gøre det bedre, sjovere og nemmere at være borger, gæst, tilflytter osv. i Aarhus-området.</p>
              <p>Nogle data er allerede tilgængelige, men med www.odaa.dk skabes overblik på ét søgbart website.</p>
              <h3>Samarbejdspartnere i ODAA</h3>
              <p>Open Data Aarhus er en del af Smart Aarhus (<a href="#">www.smartaarhus.dk</a>).</p>
              <p>Projektet er et samarbejde mellem Aarhus Kommune, Region Midtjylland, Aarhus Universitet og Alexandra Instituttet.</p>
              <h3>Status på processen</h3>
              <p>Platformen blev lanceret den 9. april 2013. Du kan her se en kort voxpop fra lanceringen. </p>
              <p>Platformen er på nuværende tidspunkt i betaversion. Den vil bl.a. blive udbygget med et forum, en idebank og et sted til use cases. </p>
              <p>I idebanken vil det være muligt at komme med idéer til, hvilke datasæt vi skal arbejde på at gøre tilgængelige. Det kan være, at du sidder med en god idé til en applikation eller service, men mangler nogle bestemte data for at virkeliggøre idéen. Din konkrete idé og dit konkrete behov for data, kan du videreformidle til os, så vi har det at gå videre med i vores jagt efter data.</p>
              <p>Det vil primært kunne dreje sig om data fra de deltagende partnere.</p>
              <p>Data frigives naturligvis kun indenfor Persondatalovens rammer.</p>
              <h3>Use cases</h3>
              <p>Hvis du har lavet en god case eller mashup med brug af åbne, danske data, må du gerne rette henvendelse til os. Gerne en dansk case, gerne fra Region Midtjylland.</p>
              <p>En del dataejere efterspørger konkrete eksempler på brugen af åbne data Danmark og gerne i regionen, så de kan se, hvad åbne data kan bruges.</p>
              <h3>Tekniske detaljer</h3>
              <p>Platformen er i betaversion.</p>
              <p>www.odaa.dk er udviklet med open source software – en kombination af CKAN (www.ckan.org) og Drupal. </p>
              <h3>Kontaktinformation</h3>
              <p>Du kan benytte kontaktformularen her.</p>
              <p>Eller du kan kontakte projektleder Birgitte Kjærgaard, bikj@aarhus.dk</p>
              <p>Du kan desuden få svar på flere af dine spørgsmål under FAQ.</p>
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