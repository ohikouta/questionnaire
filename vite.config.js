import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        host: '0.0.0.0', 
        port: 5173, // 例: ポート番号を5174に変更
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/chart.js'],
            refresh: true,
        }),
    ],
});
