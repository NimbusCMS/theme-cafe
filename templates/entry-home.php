<?php
/**
 * The café landing page (the `home` singleton).
 * @var array{title:string,fields:array<string,mixed>} $entry
 * @var callable $e @var callable $partial
 */
$f       = $entry['fields'] ?? [];
$hero    = is_array($f['hero'] ?? null) ? $f['hero'] : null; // media field -> {url, alt}
$tagline = (string) ($f['tagline'] ?? 'A good cup, a quiet corner.');
$subhead = (string) ($f['subhead'] ?? '');
$body    = (string) ($f['body'] ?? '');
$hours   = (string) ($f['hours'] ?? '');
?>
<section class="hero">
  <div class="wrap">
    <p class="eyebrow">Neighbourhood café &amp; roastery</p>
    <h1><?= $e($tagline) ?></h1>
    <?php if ($subhead !== ''): ?><p class="lead"><?= $e($subhead) ?></p><?php endif; ?>
    <div class="cta-row">
      <a class="btn btn-primary" href="/menu">See the menu</a>
      <a class="btn btn-secondary" href="/pages/visit">Visit us</a>
    </div>
    <?php if ($hero !== null && !empty($hero['url'])): ?>
      <img class="hero-photo" src="<?= $e((string) $hero['url']) ?>" alt="<?= $e((string) ($hero['alt'] ?? '')) ?>" width="1600" height="600">
    <?php endif; ?>
  </div>
</section>
<?php if ($body !== ''): ?>
<section class="band"><div class="wrap measure"><?= $partial('markdown', ['text' => $body]) ?></div></section>
<?php endif; ?>
<?php if ($hours !== ''): ?>
<section class="band band-alt"><div class="wrap measure"><h2>Opening hours</h2><?= $partial('markdown', ['text' => $hours]) ?></div></section>
<?php endif; ?>
