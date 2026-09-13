/** @type {import('@markuplint/ml-config').Config} */
export default {
	extends: ['markuplint:code-styles', 'markuplint:html-standard', 'markuplint:a11y', 'markuplint:security', 'markuplint:rdfa'],
	parser: {
		'\\.php$': '@markuplint/php-parser',
	},
	excludeFiles: ['./public/http/accept/dummy-image.php'],
	rules: {
		'head-element-order': [
			'meta[http-equiv="content-type" i]',
			'meta[charset]',
			'meta[http-equiv]',
			'meta[name]',
			'base',
			'title',
			'link[rel="preconnect" i]',
			'link[rel~="stylesheet" i]',
			'style',
			'link[rel="preload" i]',
			'link[rel="modulepreload" i]',
			'link[rel="prefetch" i]',
			'link[rel="dns-prefetch" i]',
			'link',
			'script[src]',
			'script',
			'meta',
		],
		'no-pseudo-list': false,
	},
	nodeRules: [
		{
			selector: 'head',
			rules: {
				'require-element': false,
			},
		},
		{
			selector: 'datalist, datalist > option',
			rules: {
				'require-accessible-name': false,
			},
		},
		{
			selector: ':has(> template)',
			rules: {
				'require-owned-elements': false,
			},
		},
		{
			selector: 'table:has(> tbody > template)',
			rules: {
				'require-owned-elements': false,
			},
		},
		{
			selector: 'tbody:has(> template)',
			rules: {
				'permitted-contents': false,
			},
		},
	],
	overrides: {
		'./public/html/meta-ogimage/emptyalt.html': {
			nodeRules: [
				{
					selector: 'meta[property="og:image:alt"]',
					rules: {
						'no-invalid-attr-value': false,
					},
				},
			],
		},
		'./public/html/object-image-alt/index.html': {
			nodeRules: [
				{
					selector: 'object[role="img"]',
					rules: {
						'require-accessible-name': false,
					},
				},
			],
		},
		'./public/html/ogp-charset/meta-charset-shiftjis-within1024.html': {
			nodeRules: [
				{
					selector: 'meta[charset]',
					rules: {
						'no-invalid-attr-value': false,
					},
				},
			],
		},
		'./public/html/ogp-charset/meta-charset-shiftjis-without1024.html': {
			rules: {
				'meta-charset-position': false,
			},
		},
		'./public/html/ogp-charset/meta-charset-utf8-without1024.html': {
			rules: {
				'meta-charset-position': false,
			},
		},
		'./public/html/ogp-charset/meta-httpequiv-shiftjis-within1024.html': {
			nodeRules: [
				{
					selector: 'meta[http-equiv="Content-Type" i]',
					rules: {
						'no-invalid-attr-value': false,
					},
				},
			],
		},
		'./public/html/ogp-charset/meta-httpequiv-shiftjis-without1024.html': {
			rules: {
				'meta-charset-position': false,
			},
		},
		'./public/html/ogp-charset/meta-httpequiv-utf8-without1024.html': {
			rules: {
				'meta-charset-position': false,
			},
		},
		'./public/http/uach/http.php': {
			rules: { 'required-h1': false },
		},
	},
};
