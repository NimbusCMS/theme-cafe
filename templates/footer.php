<?php
/**
 * @var string   $appName
 * @var callable $e
 * @var array<string,list<array{label:string,url:string}>> $menus
 *
 * The footer nav renders the editable `footer` menu (admin → Menus) when one is
 * set, and falls back to the café's default links otherwise.
 */
$footer = ($menus ?? [])['footer'] ?? [];
?>
<footer class="site-footer">
    <div class="wrap">
        <p>© <?= date('Y') ?> <?= $e($appName) ?> · a fictional café</p>
        <nav aria-label="Footer">
            <?php if ($footer !== []): ?>
                <?php foreach ($footer as $item): ?>
                    <a href="<?= $e($item['url']) ?>"><?= $e($item['label']) ?></a>
                <?php endforeach; ?>
            <?php else: ?>
                <a href="/menu">Menu</a>
                <a href="/pages/visit">Visit</a>
                <a href="/admin">Admin</a>
            <?php endif; ?>
        </nav>
        <p class="weight">A live <a href="https://nimbuscms.dev">NimbusCMS</a> demo · edit anything, it resets hourly.</p>
    </div>
</footer>
