<?php
const CHLIST = [
	'UA-Arch',
	'UA-Full-Version',
	'UA-Mobile',
	'UA-Model',
	'UA-Platform',
	'UA-Platform-Version',
];

$acceptChHeaderValue = ['UA'];
if (isset($_GET['ch'])) {
	foreach ($_GET['ch'] as $requestCh) {
		if (in_array($requestCh, CHLIST, true)) {
			$acceptChHeaderValue[] = $requestCh;
		}
	}
}

header('Content-Type: text/html; charset=utf-8');
header('Accept-CH: '. implode(', ', $acceptChHeaderValue));
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>User-Agent Client Hints Demo</title>
		<link rel="stylesheet" href="/labs.css" />
		<style>
			form > ul {
				padding: 0;
				display: flex;
				flex-wrap: wrap;
				gap: .5em 1em;
				list-style: none;
			}

			iframe {
				border: none;
				box-sizing: border-box;
				width: 100%;
			}
		</style>
		<script type="module">
			import uach from './uach.mjs';
			uach();

			document.addEventListener('DOMContentLoaded', () => {
				const httpIframeElement = document.getElementById('http-iframe');
				httpIframeElement.contentWindow.addEventListener('load', (ev) => {
					const heightPx = ev.target.body.offsetHeight;
					try {
						httpIframeElement.attributeStyleMap.set('height', CSS.px(heightPx));
					} catch(e) {
						httpIframeElement.style.height = `${heightPx}px`;
					}
				});
			});
		</script>
	</head>
	<body>
		<h1>User-Agent Client Hints Demo</h1>

		<p><a href="https://wicg.github.io/ua-client-hints/">Specification</a></p>
		<p>User-Agent: <?= htmlspecialchars($_SERVER['HTTP_USER_AGENT']) ?></p>

		<section>
			<h2>Accept-CH Header</h2>
			<form>
				<ul>
<?php foreach (CHLIST as $ch): ?>
					<li><label><input type="checkbox" name="ch[]" value="<?= htmlspecialchars($ch) ?>"<?php if (isset($_GET['ch']) && in_array($ch, $_GET['ch'], true)): ?> checked=""<?php endif; ?>/> <?= htmlspecialchars($ch) ?></label></li>
<?php endforeach; ?>
				</ul>
				<p><button>Set Accept-CH Header</button></p>
			</form>
		</section>

		<section>
			<h2>HTTP Request Headers</h2>

			<p><iframe src="http.php" id="http-iframe"></iframe></p>
		</section>

		<section>
			<h2>JavaScript</h2>

			<section>
				<h3><code>navigator.userAgentData.brands</code></h3>

				<table>
					<thead>
						<tr>
							<th>brand</th>
							<th>version</th>
						</tr>
					</thead>
					<tbody>
						<template id="js-uach-brands">
							<tr>
								<td id="js-uach-brands-brand"></td>
								<td id="js-uach-brands-version"></td>
							</tr>
						</template>
					</tbody>
				</table>
			</section>

			<section>
				<h3><code>navigator.userAgentData.mobile</code></h3>

				<p id="js-uach-mobile"></p>
			</section>

			<section>
				<h3><code>navigator.userAgentData.getHighEntropyValues()</code></h3>

				<table>
					<tbody>
						<template id="js-uach-highentropyvalues">
							<tr>
								<th id="js-uach-highentropyvalues-key"></th>
								<td id="js-uach-highentropyvalues-value"></td>
							</tr>
						</template>
					</tbody>
				</table>
			</section>

		</section>

		<footer>
			<p>👈 <a href="../../">Back</a></p>
		</footer>
	</body>
</html>
