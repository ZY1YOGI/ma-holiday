/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");

export default {
    darkMode: "class",
    content: [
        "./resources/views/*.blade.php",
        "./resources/views/**/*.blade.php",
        "./storage/framework/views/*.php",
    ],
    theme: {
        extend: {
            colors: {
                body: {
                    light: "#F8F8F8",
                    dark: "#1D2432",
                },
                black: '#3B3077',
            },
            container: {
                center: true,
            },
            fontFamily: {
                sans: ["Poppins", "sans-serif"]
            },
        },

    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
        require("@tailwindcss/aspect-ratio"),
    ],
}

