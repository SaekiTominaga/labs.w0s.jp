import uach from './uach.js';

uach();

document.addEventListener('DOMContentLoaded', () => {
	const httpIframeElement = document.querySelector('#http-iframe');
	httpIframeElement.contentWindow.addEventListener('load', (ev) => {
		const heightPx = ev.target.body.offsetHeight;
		try {
			httpIframeElement.attributeStyleMap.set('height', CSS.px(heightPx));
		} catch {
			httpIframeElement.style.height = `${heightPx}px`;
		}
	});
});
