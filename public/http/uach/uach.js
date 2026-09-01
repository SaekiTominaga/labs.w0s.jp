/**
 * User-Agent Client Hints を取得し、画面に表示する
 */
export default () => {
	if (navigator.userAgentData !== undefined) {
		const { userAgentData } = navigator;

		document.addEventListener('DOMContentLoaded', async () => {
			/* brands */
			const brandsTemplateElement = document.querySelector('#js-uach-brands');
			const brandsFragment = document.createDocumentFragment();
			for (const brand of userAgentData.brands) {
				const templateElementClone = brandsTemplateElement.content.cloneNode(true);

				templateElementClone.querySelector('#js-uach-brands-brand').textContent = brand.brand;
				templateElementClone.querySelector('#js-uach-brands-version').textContent = brand.version;

				brandsFragment.append(templateElementClone);
			}
			brandsTemplateElement.parentNode?.append(brandsFragment);

			/* mobile */
			document.querySelector('#js-uach-mobile').textContent = userAgentData.mobile;

			/* getHighEntropyValues() */
			const highEntropyValues = await userAgentData.getHighEntropyValues(['platform', 'platformVersion', 'architecture', 'model', 'uaFullVersion']);

			const highentropyvaluesTemplateElement = document.querySelector('#js-uach-highentropyvalues');
			const highentropyvaluesFragment = document.createDocumentFragment();
			for (const key of Object.keys(highEntropyValues)) {
				const templateElementClone = highentropyvaluesTemplateElement.content.cloneNode(true);

				templateElementClone.querySelector('#js-uach-highentropyvalues-key').textContent = key;
				templateElementClone.querySelector('#js-uach-highentropyvalues-value').textContent = highEntropyValues[key];

				highentropyvaluesFragment.append(templateElementClone);
			}
			highentropyvaluesTemplateElement.parentNode?.append(highentropyvaluesFragment);
		});
	}
};
