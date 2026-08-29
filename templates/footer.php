<?php
/** @var string $appName @var callable $e */
?>
<footer class="site-footer">
    <div class="wrap">
        <p>© <?= date('Y') ?> <?= $e($appName) ?> · a fictional café</p>
        <nav aria-label="Footer">
            <a href="/menu">Menu</a>
            <a href="/pages/visit">Visit</a>
            <a href="/admin">Admin</a>
        </nav>
        <p class="weight">A live <a href="https://nimbuscms.dev">NimbusCMS</a> demo · edit anything, it resets hourly.</p>
    </div>
</footer>
