<?php
header('Content-Type: application/json');
?>
{
	"accept": "<?= str_replace('"', '\\"', $_SERVER['HTTP_ACCEPT']) ?>"
}
