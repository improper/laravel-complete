import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import basicSsl from '@vitejs/plugin-basic-ssl'

export default defineConfig({
    plugins: [
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
        basicSsl(), // Ensure secure lando request can connect to vite
    ],
    server: { // For Lando, in general, accept request from anywhere
        https: true,
        host: true,
        port: 3009,
        hmr: {host: 'localhost', protocol: 'wss'},
    },
});
