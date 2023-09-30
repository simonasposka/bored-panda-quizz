import Vue from 'vue';
import {createInertiaApp} from '@inertiajs/vue2';

import Layout from './Layout.vue';

createInertiaApp({
    resolve: name => {
      const pages = import.meta.glob('./Pages/**/*.vue', { eager: true });

      let page = pages[`./Pages/${name}.vue`];

      page.default.layout = page.default.layout || Layout;

      return page
    },
    setup({el, App, props, plugin}) {
        Vue.use(plugin)

        new Vue({
            render: h => h(App, props),
        }).$mount(el)
    },
});
