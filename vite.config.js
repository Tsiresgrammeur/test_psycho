import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template:{
                transformAssetUrls:{
                    base:null,
                    includeAbsolute: false
                }
            }
        })
    ],
    //server:{
    //    host: '192.168.43.99',
    //    port: 8000
    //}
});
