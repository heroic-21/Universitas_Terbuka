import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    base: '/', // ⬅️ wajib: supaya path di CSS tidak berubah ke /build/
    publicDir: 'public', // ⬅️ biar /assets/... langsung ambil dari folder public
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
            '@': path.resolve(__dirname, 'resources'),
            '@css': path.resolve(__dirname, 'resources/css'),
            '@js': path.resolve(__dirname, 'resources/js'),
            '@views': path.resolve(__dirname, 'resources/views'),
        },
    },
    server: {
        open: true,
    },
});
