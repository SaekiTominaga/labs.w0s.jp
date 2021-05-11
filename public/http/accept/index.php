<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>Accept Request Header Demo</title>
		<link rel="stylesheet" href="/labs.css" />
		<style>
			.myaccept {
				color: #e00;
				background: #fff;
				font-style: normal;
			}
			.myaccept img {
				display: block;
			}
		</style>
		<script>
			document.addEventListener('DOMContentLoaded', async () => {
				const response = await fetch('dummy-json.php?fetch', {
					method: 'GET',
				});
				const responseJson = await response.json();

				document.querySelector('.js-fetch-accept').textContent = responseJson.accept;
			});
		</script>

		<link rel="stylesheet" href="dummy-stylesheet.php?link" />
		<script src="dummy-script.php?script"></script>
	</head>
	<body>
		<h1>Accept Request Header Demo</h1>

		<section>
			<h2>Default values</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept"><?= htmlspecialchars($_SERVER['HTTP_ACCEPT']) ?></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>text/html, application/xhtml+xml, image/jxr, */*</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;img&gt;</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept"><img src="dummy-image.php?img" alt="(Sorry, for technical reasons, this value can be confirmed only by users who can visually view the image.)"/></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>image/webp,*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>image/avif,image/webp,image/apng,image/*,*/*;q=0.8</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>image/webp,image/apng,image/*,*/*;q=0.8</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>image/avif,image/webp,image/apng,image/*,*/*;q=0.8</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>image/png, image/svg+xml, image/jxr, image/*; q=0.8, */*; q=0.5</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>image/png,image/svg+xml,image/*;q=0.8,video/*;q=0.8,*/*;q=0.5</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;obeject type="image/png"&gt;</h2>

			<p><object data="dummy-image.png?object" type="image/png"></object></p>

			<table>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>?</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;obeject type="image/svg+xml"&gt;</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept"><object data="dummy-image.php?object" type="image/svg+xml">(Sorry, for technical reasons, this value can be confirmed only by users who can visually view the image.)"/></object></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>text/html, application/xhtml+xml, image/jxr, */*</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;embed type="image/png"&gt;</h2>

			<p><embed src="dummy-image.png?embed" type="image/png"/></p>

			<table>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>(Not supported)</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>?</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;embed type="image/svg+xml"&gt;</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept"><embed src="dummy-image.php?embed" type="image/svg+xml"/></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>text/html, application/xhtml+xml, image/jxr, */*</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;link rel="stylesheet"&gt;</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept css-accept"></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>text/css,*/*;q=0.1</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>text/css,*/*;q=0.1</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>text/css,*/*;q=0.1</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>text/css,*/*;q=0.1</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>text/css, */*</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>text/css,*/*;q=0.1</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>&lt;script&gt;</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept js-accept"></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>application/javascript, */*; q=0.8</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>*/*</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>Fetch API (JavaScript)</h2>

			<table>
				<tbody>
					<tr>
						<th>Your Browser</th>
						<td><em class="myaccept js-fetch-accept"></em></td>
					</tr>
				</tbody>
				<tbody>
					<tr>
						<th>Windows 10 + Firefox 80</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Chrome 85</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Edge 84</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + Vivaldi 3.3</th>
						<td>*/*</td>
					</tr>
					<tr>
						<th>Windows 10 + IE 11</th>
						<td>(Not supported)</td>
					</tr>
					<tr>
						<th>iPadOS 13.6 + Safari 13.1</th>
						<td>*/*</td>
					</tr>
				</tbody>
			</table>
		</section>

		<footer>
			<p>👈 <a href="../../">Back</a></p>
		</footer>
	</body>
</html>
