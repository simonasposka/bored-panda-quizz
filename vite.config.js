import {defineConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue2';
import vueJsx from '@vitejs/plugin-vue-jsx';
// import basicSsl from '@vitejs/plugin-basic-ssl';

export default defineConfig({
  server: {
    // https: true,
  },
  plugins: [
    // basicSsl(),
    laravel({
      input: ['resources/css/app.css', 'resources/js/app.js'],
      refresh: true,
    }),
    vue({
      // template: {
      //     transformAssetUrls: {
      //         base: null,
      //         includeAbsolute: false,
      //     },
      // },
    }),
    vueJsx(),
  ],
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', {eager: true})
    return pages[`./Pages/${name}.vue`]
  },
});
