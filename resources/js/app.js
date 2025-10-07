import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

// import 'bootstrap';
// import 'bootstrap/dist/css/bootstrap.min.css';
// import '../css/custom.css';
import '../css/style.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Link } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

import Layout from '@/Layout.vue';
// import helpers from '@/helpers';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';
const base_url = import.meta.env.VITE_BASE_URL;

createInertiaApp({
	resolve: name => {
    	const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    	let page = pages[`./Pages/${name}.vue`]
    	page.default.layout = page.default.layout || Layout
    	return page
  	},
  	// title: (title) => `${title} - ${appName}`,
  	title: (title) => `${title}`,
  	setup({ el, App, props, plugin }) {
    	createApp({ render: () => h(App, props) })
      	.use(plugin)
      	.use(ZiggyVue)
      	// .use(helpers, App)
      	// .use(VueSweetAlert)
      	// .use(Notifications)
      	// .use(FloatingVue)

      	.component('Link', Link)
      	.provide('base_url', base_url)
      	// .component('submit-form-button', SubmitFormButtonComponent)
		// .component('loading-card-overlay', LoadingCardOverlayComponent)
		// .component('l-pagination', LaravelPaginationComponent)
		// .component('delete-parametre-data', DeleteParametreDataComponent)
		// .component('table-sort-button', tableSortButtonComponent)
		// .component('per-page', PerPageComponent)

      	.mount(el)
  	},
  	progress: {
		delay: 250, // The delay after which the progress bar will appear, in milliseconds...
		color: '#29d', // The color of the progress bar...
		includeCSS: true, // Whether to include the default NProgress styles...
		showSpinner: true, // Whether the NProgress spinner will be shown...
	},
})