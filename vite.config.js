import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'backend/assets/css/style.css',
            'backend/assets/css/components.css',
            'resources/js/app.js',
            'backend/assets/js/scripts.js',
            'backend/assets/js/custom.js'
        ]),
    ],
});
