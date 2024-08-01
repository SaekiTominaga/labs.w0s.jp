// @ts-check

import globals from 'globals';
import tseslint from 'typescript-eslint';
import { FlatCompat } from '@eslint/eslintrc';
import w0sConfig from '@w0s/eslint-config';

const compat = new FlatCompat();

/** @type {import("@typescript-eslint/utils/ts-eslint").FlatConfig.ConfigArray} */
export default tseslint.config(
	...w0sConfig,

	/* Plugins */
	// @ts-expect-error: ts(2345)
	...compat.plugins('eslint-plugin-html'),

	{
		files: ['public/**/*.js', 'public/**/*.html'],
		languageOptions: {
			globals: globals.browser,
		},
		rules: {
			'no-console': 'off',
		},
	},
	{
		files: ['public/http/reporting/*.html'],
		rules: {
			'no-alert': 'off',
		},
	}
);
