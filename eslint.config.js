// @ts-check

import { defineConfig } from 'eslint/config';
import w0sConfig from '@w0s/eslint-config';
import pluginHtml from 'eslint-plugin-html';
import globals from 'globals';

/** @type {import("eslint").Linter.Config[]} */
export default defineConfig(
	w0sConfig,

	{
		files: ['public/**/*.html'],
		plugins: {
			'@html-eslint': pluginHtml,
		},
	},
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
	},
);
