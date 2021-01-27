<?php
header('Content-Type: image/svg+xml; charset=utf-8');
?>
<svg xmlns="http://www.w3.org/2000/svg" width="<?= strlen($_SERVER['HTTP_ACCEPT']) * 10 ?>" height="24" viewBox="0 0 <?= strlen($_SERVER['HTTP_ACCEPT']) * 10 ?> 24">
<text x="0" y="16" style="fill: #e00; font-size: 16px;"><?= htmlspecialchars($_SERVER['HTTP_ACCEPT']) ?></text>
</svg>
