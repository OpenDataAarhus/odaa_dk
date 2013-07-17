<h2 class="spotbox--header"><a href="#"><i class="icon-sitemap"></i><?php print t('Latest dataset'); ?></a></h2>
<?php if (!empty($list)): ?>
  <ul class="spotbox--list">
    <?php $size = (count($list) < 10)?count($list):10; ?>

    <?php for($i = 0; $i < $size; $i++): ?>
      <li class="spotbox--list-item">
        <div class="spotbox--list-image"><a href="#comment1"><img src="//gravatar.com/avatar/f9879d71855b5ff21e4963273a886bfc?s=30&amp;d=identicon" /></a></div>
        <span class="spotbox--list-link"><a href="/dataset/<?php print $list[$i]->name; ?>"><?php print $list[$i]->title; ?></a></span>
        <p class="spotbox--list-posted"><?php print $list[$i]->format_interval; ?>  <?php print t('since last update'); ?></p>
      </li>
    <?php endfor; ?>
  </ul>
<?php endif; ?>