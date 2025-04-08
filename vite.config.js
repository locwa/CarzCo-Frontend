import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    // Base is configured for build in production-dev environment. Remove base if deploying on a proper server with proper configuration
    // base: '/CarzCo/CarzCo-Frontend/public/build',
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
