/**
 * User-Agent Client Hints を取得し、画面に表示する
 */
export default () => {
	if (navigator.userAgentData !== undefined) {
		const userAgentData = navigator.userAgentData;

		document.addEventListener('DOMContentLoaded', async () => {
			/* brands */
			const brandsTemplateElement = document.getElementById('js-uach-brands');
			const brandsFragment = document.createDocumentFragment();
			for (const brand of userAgentData.brands) {
				const templateElementClone = brandsTemplateElement.content.cloneNode(true);

				templateElementClone.getElementById('js-uach-brands-brand').textContent = brand.brand;
				templateElementClone.getElementById('js-uach-brands-version').textContent = brand.version;

				brandsFragment.appendChild(templateElementClone);
			}
			brandsTemplateElement.parentNode?.appendChild(brandsFragment);

			/* mobile */
			document.getElementById('js-uach-mobile').textContent = userAgentData.mobile;

			/* getHighEntropyValues() */
			const highEntropyValues = await userAgentData.getHighEntropyValues(['platform', 'platformVersion', 'architecture', 'model', 'uaFullVersion']);

			const highentropyvaluesTemplateElement = document.getElementById('js-uach-highentropyvalues');
			const highentropyvaluesFragment = document.createDocumentFragment();
			for (const key of Object.keys(highEntropyValues)) {
				const templateElementClone = highentropyvaluesTemplateElement.content.cloneNode(true);

				templateElementClone.getElementById('js-uach-highentropyvalues-key').textContent = key;
				templateElementClone.getElementById('js-uach-highentropyvalues-value').textContent = highEntropyValues[key];

				highentropyvaluesFragment.appendChild(templateElementClone);
			}
			highentropyvaluesTemplateElement.parentNode?.appendChild(highentropyvaluesFragment);
		});
	}
};
