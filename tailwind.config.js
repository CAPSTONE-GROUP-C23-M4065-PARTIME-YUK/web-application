const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                serif: ["Merriweather", "serif"],
            },
            borderRadius: {
                "4xl": "2rem",
            },
            colors: {
                primary: "#F4F6F8",
                secondary: "#333333",
                accent3: "#3772FF",
                accent2: "#FF8800",
                accent1: "#551283",
            },
        },
    },

    plugins: [require("flowbite/plugin"), require("@tailwindcss/forms")],
};
