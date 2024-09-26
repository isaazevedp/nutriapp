import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css', 'resources/css/anotacoes.css', 'resources/css/css.css', 'resources/css/menuBar.css', 'resources/css/menuStyle.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
