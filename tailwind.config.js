/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        'C:/laragon/www/web/vendor/awcodes/filament-quick-create/resources/**/*.blade.php',

    ],
    variants: {
        extend: {
            maxHeight: ['peer-checked'],
            display: ['peer-checked'],
        },
    },
    theme: {
        extend: {
            colors: {
                'borderBlue': '#228EE5',
                'black-theme': '#030A1B',
            },
            gap: {
                '-4px': '-4px', // Thêm khoảng cách âm -4px
            },
            fontFamily: {
                blackChancery: ['BlackChancery', 'cursive'], // 'cursive' là font dự phòng nếu 'BlackChancery' không tải được
            },
        },
    },
    plugins: [],
};
