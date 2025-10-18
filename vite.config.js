import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/app-landing.scss',
                'resources/js/app-landing.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@css': path.resolve(__dirname, 'resources/css'),
            '@js': path.resolve(__dirname, 'resources/js'),
            '@views': path.resolve(__dirname, 'resources/views'),
        },
    },
    server: {
        open: true,
    },
});
