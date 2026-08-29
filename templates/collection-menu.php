<?php
/**
 * The menu (/menu) — live entries grouped by their `category` field.
 * @var array{handle:string,name:string} $collection
 * @var list<array<string,mixed>> $entries
 * @var callable $e
 */
$groups = [];
foreach ($entries as $item) {
    $cat = (string) (($item['fields']['category'] ?? '') ?: 'More');
    $groups[$cat][] = $item;
}
?>
<section class="menu-page">
  <div class="wrap measure">
    <p class="eyebrow">Menu</p>
    <h1>What&rsquo;s on</h1>
    <p class="note">Prices in pounds. Everything here is editable — it&rsquo;s a demo.</p>
    <?php foreach ($groups as $cat => $items): ?>
      <section class="menu-group">
        <h2><?= $e($cat) ?></h2>
        <ul class="menu-list">
          <?php foreach ($items as $item): $ff = $item['fields'] ?? []; $price = $ff['price'] ?? null; $photo = is_array($ff['photo'] ?? null) ? $ff['photo'] : null; ?>
            <li class="menu-item<?= $photo !== null && !empty($photo['url']) ? ' has-photo' : '' ?>">
              <?php if ($photo !== null && !empty($photo['url'])): ?>
                <img class="menu-photo" src="<?= $e((string) $photo['url']) ?>" alt="<?= $e((string) ($photo['alt'] ?? '')) ?>" width="800" height="600" loading="lazy">
              <?php endif; ?>
              <div class="menu-body">
              <div class="menu-row">
                <span class="menu-name"><?= $e((string) $item['title']) ?><?php if (!empty($ff['featured'])): ?> <span class="badge">house favourite</span><?php endif; ?></span>
                <span class="menu-dots" aria-hidden="true"></span>
                <span class="menu-price"><?= $price !== null && $price !== '' ? '&pound;' . $e(number_format((float) $price, 2)) : '' ?></span>
              </div>
              <?php $desc = trim((string) ($ff['body'] ?? '')); if ($desc !== ''): ?><p class="menu-desc"><?= $e($desc) ?></p><?php endif; ?>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    <?php endforeach; ?>
    <?php if ($entries === []): ?><p>The menu is empty right now — <a href="/admin/collections">add an item in the admin</a>.</p><?php endif; ?>
  </div>
</section>
