/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./index.html",
        "./resources/js/**/*.{vue,js,ts,jsx,tsx}",
    ],
    theme: {
        extend: {
          fontFamily: {
            roboto: "Roboto, sans-serif",
          }
        },
    },
    plugins: [],
}

