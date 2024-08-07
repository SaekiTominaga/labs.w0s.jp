/** @type {import('stylelint').Config} */
export default {
	extends: ['@w0s/stylelint-config'],
	rules: {
		'declaration-no-important': null,
		'selector-class-pattern': '^([a-z][a-z0-9]*)(-[a-z0-9]+)*$|^-([a-z][a-z0-9]*)(-[a-z0-9]+)*$',
	},
	overrides: [
		{
			files: ['*.html'],
			customSyntax: 'postcss-html',
		},
	],
};
