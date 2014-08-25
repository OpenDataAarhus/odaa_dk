<h3 class="search-spotbox--header"><i class="icon-search"></i><?php print t('Search for dataset'); ?></h3>
<div class="search-spotbox--dataset-amount-wrapper">
  <div class="search-spotbox--dataset-amount"><?php print $count; ?></div>
  <div class="search-spotbox--dataset-amount-text"><?php print t('dataset'); ?></div>
</div>
<div class="search-spotbox--wrapper">
  <form action="/dataset" method="get">
    <input type="text" name="q" placeholder="<?php print t('Search for dataset'); ?> ..." class="search-form-text">
    <?php if ($ckan_organization): ?>
      <input type="hidden" name="organization" value="<?php print $ckan_organization ?>">
    <?php endif; ?>
    <input type="submit" value="Søg" class="button">
  </form>
</div>
