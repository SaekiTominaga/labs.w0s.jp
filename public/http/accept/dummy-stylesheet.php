<?php
header('Content-Type: text/css; charset=utf-8');
?>
.css-accept::before {
	content: '<?= str_replace('\'', '\\\'', $_SERVER['HTTP_ACCEPT']) ?>';
}
