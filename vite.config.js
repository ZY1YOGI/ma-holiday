import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: 'localhost',
            // protocol: 'https'
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/ts/app.ts'],
            refresh: [...refreshPaths],
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources',
        },
    },
});
