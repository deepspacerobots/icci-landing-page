import { defineConfig } from 'vite';

export default defineConfig(() => {
	return {
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
