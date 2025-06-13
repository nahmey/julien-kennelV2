import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig(({ mode }) => {
    const env = loadEnv(mode, process.cwd());
    const isDev = env.VITE_DEV === 'true';

    return {
        server: {
            cors: isDev ? true : null,
            host: isDev ? '0.0.0.0' : '127.0.0.1',
            port: isDev ? 5173 : null,
            hmr: {
                // host: 'local.odonat_bo',
                host : isDev ? env.VITE_APP_SERVER_NAME : null,
            }
            // cors: isDev ? true : false,
            // host: '0.0.0.0',
            // port: 5173,
            // hmr: {
            //     // host: 'local.odonat_bo',
            //     host : env.VITE_APP_SERVER_NAME,
            // }
        },
        plugins: [
            laravel({
                input: [
                    'resources/sass/app.scss',
                    'resources/js/app.js',
                    // 'resources/js/plugins.bundle.js',
                    // 'resources/js/scripts.bundle.js',
                    // 'resources/js/widgets.bundle.js',
                    // 'resources/js/widgets.js'
                ],
                refresh: true,
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
        resolve: {
            alias: {
                vue: 'vue/dist/vue.esm-bundler.js',
            },
        },
    }
});
