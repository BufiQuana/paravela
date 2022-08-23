import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/index.css',
                'resources/css/admin.css',
                'resources/css/tin.css',
                'resources/css/tab-default.css',
                'resources/css/tien-ich.css',
                'resources/css/can-ho.css',
                'resources/css/gioi-thieu.css',
                'resources/js/app.js',
                'resources/js/index.js',


                //the remaining code

            ],
            refresh: true,
        }),

    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            '@': '/resources/css'
        }
    }
});
