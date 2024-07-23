import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',          //tailwind
                'resources/js/app.js',              //tailwind and fonawsome icon
                'resources/css/app_fonawsome.css',  //fonawsome icon
            ],
            refresh: true,
        }),
    ],
});
