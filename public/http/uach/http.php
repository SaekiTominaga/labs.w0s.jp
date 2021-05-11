<?php
header('Content-Type: text/html; charset=utf-8');
header('X-Robots-Tag: noindex');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>User-Agent Client Hints Demo</title>
		<link rel="stylesheet" href="/labs.css" />
		<style>
			body {
				margin: 0;
			}
		</style>
	</head>
	<body>
		<table>
			<tbody>
<?php foreach ($_SERVER as $key => $value): ?>
<?php if ($key === 'HTTP_SEC_CH_UA' || strpos($key, 'HTTP_SEC_CH_UA_') === 0): ?>
				<tr>
					<th><?= htmlspecialchars(strtolower(str_replace('_', '-', substr($key, 5)))) ?></th>
					<td><?= htmlspecialchars($value) ?></td>
				</tr>
<?php endif; ?>
<?php endforeach; ?>
			</tbody>
		</table>
	</body>
</html>
