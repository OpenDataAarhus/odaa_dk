<div class="search-spotbox">
  <div class="search-spotbox--inner">
    <h3 class="search-spotbox--header"><?php print t('Search for'); ?></h3>
    <div class="search-spotbox--dataset-amount-wrapper">
      <div class="search-spotbox--dataset-amount"><?php print $count; ?></div>
      <div class="search-spotbox--dataset-amount-text"><?php print t('dataset'); ?></div>
    </div>
    <div class="search-spotbox--wrapper">
      <form action="/dataset" method="get">
        <input type="text" name="q" placeholder="<?php print t('Search for dataset'); ?> ..." class="search-form-text">
        <input type="submit" value="Søg" class="button">
      </form>
    </div>
  </div>
</div>