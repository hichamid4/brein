import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "public/website/assets/css/*.css", // Add your new CSS assets
                "public/website/assets/js/*.js",
                "public/website/assets/plugins/*/*.js",
                "public/website/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/*.js",
            ],
            refresh: true,
        }),
    ],
});
