import config from '@w0s/oxlint-config/browser';
import { defineConfig } from 'oxlint';

export default defineConfig({
	extends: [config],
	rules: {
		'no-console': 'off',
		'import/unambiguous': 'off',
	},
});
