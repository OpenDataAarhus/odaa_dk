<?php include './inc/mockup-functions.inc'; ?>
<?php include './snippets/doctype.inc'; ?>
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <?php include 'snippets/head.inc'; ?>
  <title>Om ODAA</title>
  <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
  <script src="/sites/odaa.dk/themes/odaa/templates/mockups/pure_min.js"></script>
  <script src="/sites/odaa.dk/themes/odaa/templates/mockups/comment.js"></script>
  
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
              
              <div class="comment-wrapper" id="34567">
                <div class="comment">
                  <div class="cid"></div>
                  <div class="author"></div>
                  <div class="date"></div>
                  <div class="subject"></div> 
                  <a class="delete" href="#">Delete-icon</a>
                </div>
                
                <div class="new-comment">
                  <form action="" method="">
                    <label for="message">Message</label>
                    <textarea id="message"></textarea>
                    <button>Submit</button>
                  </form>
                </div>
              </div
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