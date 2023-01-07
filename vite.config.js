import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import basicSsl from '@vitejs/plugin-basic-ssl'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        basicSsl(), // Ensure secure lando request can connect to vite
    ],
    server: {
        https: true,
        host: true,
        port: 3009,
        hmr: {host: 'localhost', protocol: 'wss'},
    },
});
