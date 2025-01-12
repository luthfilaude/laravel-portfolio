import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        colors: {
            'green-dark': '#4B5945',
            'green1': '#66785F',
            'green2': '#91AC8F',
            'green3': '#B2C9AD',
            'main': '#E8DFCA',
        },
        extend: {
            fontFamily: {
                sans: ['Poppins', 'sans-serif'], // Ganti default sans-serif menjadi Poppins
              },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
