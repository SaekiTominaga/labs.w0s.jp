<?php
header('Content-Type: application/javascript; charset=utf-8');
?>
document.addEventListener('DOMContentLoaded', function() {
	document.querySelector('.js-accept').textContent = '<?= str_replace('\'', '\\\'', $_SERVER['HTTP_ACCEPT']) ?>';
});
