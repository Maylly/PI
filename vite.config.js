import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/auth/login.css',
                'resources/css/events/create_acat.css',
                'resources/css/events/create_eco.css',
                'resources/css/events/create.css',
                'resources/css/events/eventos.css',
                'resources/css/projects/acat.css',
                'resources/css/projects/eco.css',
                'resources/css/admin.css',
                'resources/css/main.css',

                'resources/img/icons/loupe.svg',
                'resources/img/background.svg',
                'resources/img/logo.svg',

                'resources/js/app.js',
                'resources/js/header.js'
            ],
            refresh: true
        }),
    ],
});
