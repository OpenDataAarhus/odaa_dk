<h2 class="spotbox--header"><a href="/dataset"><i class="icon-sitemap"></i><?php print t('Latest dataset'); ?></a></h2>
<?php if (!empty($list)): ?>
  <ul class="spotbox--list">
    <?php $count = 0; ?>
    <?php foreach ($list as $item): ?>
      <?php if ($count <= 10): ?>
        <?php $count++; ?>
        <li class="spotbox--list-item">
          <span class="spotbox--list-link"><a href="/dataset/<?php print $item->name; ?>"><?php print $item->title; ?></a></span>
          <p class="spotbox--list-posted"><?php print $item->format_interval; ?>  <?php print t('since last update'); ?></p>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>
