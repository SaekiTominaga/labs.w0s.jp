document.addEventListener('DOMContentLoaded', () => {
	document.querySelector('#support-share').textContent = navigator.share !== undefined ? '✔ Support' : '✘ No Support';
	document.querySelector('#support-canshare').textContent = navigator.share !== undefined ? '✔ Support' : '✘ No Support';
});

if (navigator.share !== undefined) {
	/* 未対応ブラウザも多いので判定処理 */
	document.addEventListener('DOMContentLoaded', () => {
		const shareErrorMessageElement = document.querySelector('#share-error');
		for (const shareButtonElement of document.querySelectorAll('.share-button')) {
			shareButtonElement.disabled = false; // ボタンを活性化
			shareButtonElement.addEventListener('click', () => {
				const { shareTitle, shareText, shareUrl } = shareButtonElement.dataset;

				try {
					navigator.share({
						title: shareTitle !== undefined ? shareTitle : document.title, // 属性が指定されていないときはページタイトル
						text: shareText,
						url: shareUrl !== undefined ? shareUrl : document.URL, // 属性が指定されていないときはページURL
					});

					shareErrorMessageElement.textContent = '';
				} catch (error) {
					console.error('Share failed', error);
					shareErrorMessageElement.textContent = error.message;
				}
			});
		}
	});
}
