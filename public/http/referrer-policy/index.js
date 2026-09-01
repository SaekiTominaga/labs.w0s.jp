await Promise.all([
	fetch('fetch.txt', {
		method: 'HEAD',
	}),

	fetch('fetch_.txt', {
		method: 'HEAD',
		referrerPolicy: '',
	}),

	fetch('fetch_no-referrer.txt', {
		method: 'HEAD',
		referrerPolicy: 'no-referrer',
	}),

	fetch('fetch_no-referrer-when-downgrade.txt', {
		method: 'HEAD',
		referrerPolicy: 'no-referrer-when-downgrade',
	}),

	fetch('fetch_same-origin.txt', {
		method: 'HEAD',
		referrerPolicy: 'same-origin',
	}),

	fetch('fetch_origin.txt', {
		method: 'HEAD',
		referrerPolicy: 'origin',
	}),

	fetch('fetch_strict-origin.txt', {
		method: 'HEAD',
		referrerPolicy: 'strict-origin',
	}),

	fetch('fetch_origin-when-cross-origin.txt', {
		method: 'HEAD',
		referrerPolicy: 'origin-when-cross-origin',
	}),

	fetch('fetch_strict-origin-when-cross-origin.txt', {
		method: 'HEAD',
		referrerPolicy: 'strict-origin-when-cross-origin',
	}),

	fetch('fetch_unsafe-url.txt', {
		method: 'HEAD',
		referrerPolicy: 'unsafe-url',
	}),
]);
