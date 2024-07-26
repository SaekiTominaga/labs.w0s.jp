// @ts-check

import tseslint from 'typescript-eslint';
import { FlatCompat } from '@eslint/eslintrc';
import w0sConfig from '@w0s/eslint-config';

const compat = new FlatCompat();

/** @type {import("@typescript-eslint/utils/ts-eslint").FlatConfig.ConfigArray} */
export default tseslint.config(
	...w0sConfig,
	// @ts-ignore
	...compat.plugins('eslint-plugin-html'),
	{
		rules: {
			'no-console': 'off',
		},
	},
	{
		files: ['./public/http/reporting/*.html'],
		rules: {
			'no-alert': 'off',
		},
	}
);
