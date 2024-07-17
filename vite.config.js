import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';
import laravel, { refreshPaths } from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        vue({
            template: {
                compilerOptions: {
                    // Explicitly set runtime to 'esm'
                    runtime: 'esm',
                },
            },
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
    server: {
        hmr: {
            overlay: false, // This will disable the overlay for HMR errors
        },
    },
});
