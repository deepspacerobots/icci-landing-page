import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig(() => {
	return {
		build: {
			rollupOptions: {
				input: {
					main: resolve(__dirname, 'index.html'),
					caclc: resolve(__dirname, 'caclc.html'),
					cpclc: resolve(__dirname, 'cpclc.html'),
					cmclc: resolve(__dirname, 'cmclc.html'),
				},
			},
		},
		css: {
			preprocessorOptions: {
				scss: {
					// example : additionalData: `@import "./src/design/styles/variables";`
					// dont need include file extend .scss
					additionalData: `@import "./src/scss/functions";`,
				},
			},
		},
	};
});
