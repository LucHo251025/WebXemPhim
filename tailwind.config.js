/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'borderBlue': '#228EE5',
                'black-theme': '#030A1B',
            },
        },
    },
    plugins: [],
};
