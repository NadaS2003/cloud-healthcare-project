import { defineConfig } from 'vite';
import tailwindcss from 'tailwindcss';
import autoprefixer from 'autoprefixer';

// استخدام import ديناميكي لتحميل laravel-vite-plugin
const laravelVitePlugin = import('laravel-vite-plugin');

export default defineConfig({
    plugins: [
        laravelVitePlugin.then(({ default: laravel }) => laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        })),
    ],
    css: {
        postcss: {
            plugins: [
                tailwindcss,
                autoprefixer,
            ],
        },
    },
});
