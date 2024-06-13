import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                welcome: ["Tenor Sans", "Roboto", "sans-serif"],
            },
            fontWeight: {
                light: 400,
                normal: 400,
                medium: 400,
                semibold: 400,
                bold: 400,
            },
            colors: {
                foreground: "#cc9999",
                background: "#e5e5e5",
            },
        },
    },

    plugins: [forms],
};
