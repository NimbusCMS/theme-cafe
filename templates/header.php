<?php
/**
 * @var string $appName
 * @var array<string,list<array{label:string,url:string}>> $menus
 * @var callable $e
 */
$main = ($menus ?? [])['main'] ?? [];
?>
<header class="site-header">
    <div class="wrap">
        <a class="brand" href="/">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 8h11a3 3 0 0 1 0 6h-1"/><path d="M5 8v6a4 4 0 0 0 4 4h2a4 4 0 0 0 4-4V8z"/><path d="M8 3c-.5.7-.5 1.3 0 2M11 3c-.5.7-.5 1.3 0 2"/>
            </svg>
            <?= $e($appName) ?>
        </a>
        <?php if ($main !== []): ?>
            <nav class="site-nav" aria-label="Site">
                <?php foreach ($main as $item): ?>
                    <a href="<?= $e($item['url']) ?>"><?= $e($item['label']) ?></a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>
    </div>
</header>
