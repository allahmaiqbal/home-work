import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';
import legacy from '@vitejs/plugin-legacy';

export default defineConfig({
    plugins: [

        legacy({
            targets: ['defaults', 'not IE 11']
        }),
        laravel({

            input: [
                "resources/assets/template/plugins/fontawesome-free/css/all.min.css",
                "resources/assets/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
                "resources/assets/template/dist/css/adminlte.min.css",

                "resources/assets/template/plugins/jquery/jquery.min.js",
                "resources/assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js",
                "resources/assets/template/dist/js/adminlte.min.js",
            ],
            refresh: true,
        }),
    ],
});
