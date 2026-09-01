const response = await fetch('dummy-json.php?fetch', {
	method: 'GET',
});
const responseJson = await response.json();

document.querySelector('.js-fetch-accept').textContent = responseJson.accept;
