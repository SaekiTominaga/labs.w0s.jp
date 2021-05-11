<?php
session_start([
	'cache_expire' => '0',
	'cache_limiter' => 'private_no_expire',
	'cookie_httponly' => 'On',
	'cookie_secure' => 'On',
	'cookie_samesite' => 'Strict',
	'name' => 'LAB-STRICT-OFF-SESSID',
	'use_strict_mode' => 'Off',
]);

if (isset($_POST['reset']) && $_POST['reset'] === '1') {
	$_SESSION = [];
	session_destroy();

	header('HTTP/1.1 303 See Other');
	header("Location: {$_SERVER['REQUEST_URI']}");

	exit();
}

$_SESSION['counter'] = isset($_SESSION['counter']) ? $_SESSION['counter'] + 1 : 1;
$_SESSION['time'] = time();

header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>PHP Session Demo (use_strict_mode=Off)</title>
		<link rel="stylesheet" href="/labs.css" />
	</head>
	<body>
		<h1>PHP Session Demo (use_strict_mode=Off)</h1>

		<dl>
			<dt>Session ID</dt>
			<dd><?= htmlspecialchars(session_id()) ?></dd>
			<dt>Counter</dt>
			<dd><?= htmlspecialchars($_SESSION['counter']) ?></dd>
		</dl>

		<form method="post">
			<p><button type="button" onclick="location.reload()">Reload</button> <button name="reset" value="1">Reset</button></p>
		</form>

		<section>
			<h2>PHP Source Code</h2>

			<section>
				<h3>Page Load</h3>

				<pre><code>session_start([
	'cache_expire' => '0',
	'cache_limiter' => 'private_no_expire',
	'cookie_httponly' => 'On',
	'cookie_secure' => 'On',
	'cookie_samesite' => 'Strict',
	'name' => 'LAB-STRICT-OFF-SESSID',
	<a href="https://www.php.net/manual/en/session.configuration.php#ini.session.use-strict-mode">'use_strict_mode'</a> => 'Off',
]);</code></pre>

			</section>

			<section>
				<h3>`Reset` button click</h3>

				<pre><code>$_SESSION = [];
session_destroy();</code></pre>
			</section>
		</section>

		<footer>
			<p>👈 <a href="./">Back</a></p>
		</footer>
	</body>
</html>
