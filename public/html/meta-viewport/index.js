document.addEventListener('DOMContentLoaded', () => {
	const viewportElement = document.querySelector('meta[name="viewport"]');
	const viewportOutputElement = document.querySelector('#output-viewport-value');
	viewportOutputElement.value = viewportElement.content;

	const viewportContentMap = new Map();
	for (const property of viewportElement.content.split(',')) {
		const [key, value] = property.split('=');
		viewportContentMap.set(key, value);
	}

	for (const inputElement of document.querySelectorAll('.form input:not([type="hidden"])')) {
		inputElement.addEventListener('change', (ev) => {
			const targetElement = ev.target;
			const updateKey = targetElement.name;
			const updateValue = targetElement.value;

			if (updateValue === '') {
				viewportContentMap.delete(updateKey);
			} else {
				viewportContentMap.set(updateKey, updateValue);
			}

			const properties = [];
			for (const [key, value] of viewportContentMap) {
				properties.push(`${key}=${value}`);
			}
			properties.sort();
			const viewportNewContent = properties.join(',');
			viewportElement.content = viewportNewContent;
			viewportOutputElement.value = viewportNewContent;
		});
	}
});
