import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],

            refresh: [
                "resources/views/**/*.blade.php", // Agrega esta línea
                "resources/views/*.blade.php", // Agrega esta línea
                "resources/views/**/**/*.blade.php", // Agrega esta línea
            ],
        }),
    ],
});
