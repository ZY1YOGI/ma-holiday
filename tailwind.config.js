/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "class",
  content: [
    "./resources/views/*.blade.php",
    "./resources/views/**/*.blade.php",
    // "./storage/framework/views/*.php",
  ],
  theme: {
    extend: {
      colors: {
        body: {
          light: "#E4E9F7",
          dark: "#0E1422",
        },
        primary: "#2079FF"
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
    require("@tailwindcss/aspect-ratio"),
  ],
}

