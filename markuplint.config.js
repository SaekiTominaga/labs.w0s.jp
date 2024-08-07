/** @type {import('@markuplint/ml-config').Config} */
export default {
	extends: ['markuplint:code-styles', 'markuplint:html-standard', 'markuplint:a11y', 'markuplint:security', 'markuplint:rdfa'],
	parser: {
		'\\.php$': '@markuplint/php-parser',
	},
	excludeFiles: ['./public/http/accept/dummy-image.php'],
	rules: {
		'use-list': false,
	},
	nodeRules: [
		{
			selector: 'head',
			rules: {
				'required-element': false,
			},
		},
		{
			selector: 'table, input[type=submit], input[type=button], input[type=reset], datalist, datalist > option, dialog',
			rules: {
				'require-accessible-name': false,
			},
		},
		{
			selector: ':has(> template)',
			rules: {
				'permitted-contents': false,
				'wai-aria': false,
			},
		},
		{
			selector: 'table:has(template)',
			rules: {
				'wai-aria': false,
			},
		},
	],
	overrides: {
		'./public/html/iframe/frame.html': {
			rules: {
				'required-h1': false,
			},
		},
		'./public/html/meta-ogimage/emptyalt.html': {
			rules: {
				'invalid-attr': false,
			},
		},
		'./public/html/object-image-alt/index.html': {
			rules: {
				'require-accessible-name': false,
			},
		},
		'./public/html/ogp-charset/meta-charset-shiftjis-without1024.html': {
			rules: {
				'invalid-attr': false,
			},
		},
		'./public/html/ogp-charset/meta-charset-shiftjis-within1024.html': {
			rules: {
				'invalid-attr': false,
			},
		},
		'./public/html/details/index.html': {
			rules: {
				'no-refer-to-non-existent-id': false,
			},
		},
		'./public/http/uach/http.php': {
			rules: {
				'required-h1': false,
			},
		},
	},
};
