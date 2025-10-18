import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import commonjs from '@rollup/plugin-commonjs';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/app-landing.scss',
                'resources/js/app-landing.js',
            ],
            refresh: true,
        }),
        // Transform CommonJS modules so `require()` works in browser
        commonjs(),
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
    build: {
        rollupOptions: {
            output: {
                // Split vendor code to reduce main bundle size
                manualChunks(id) {
                    if (id.includes('node_modules')) {
                        return 'vendor';
                    }
                },
            },
        },
        chunkSizeWarningLimit: 1000, // Increase if some JS files are large
    },
    optimizeDeps: {
        // Include problematic CommonJS packages if any
        include: [
            // Example: 'some-old-package'
        ],
    },
    css: {
        preprocessorOptions: {
            scss: {
                // Automatically load global variables in all SCSS files
                additionalData: `@use "@css/global/_variables" as *;`,
            },
        },
    },
});
