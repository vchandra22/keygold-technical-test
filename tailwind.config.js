/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ["Playfair Display", "sans-serif"],
                paragraph: ["Kumbh Sans", "serif"],
            },
            colors: {
                putih: "#FEFEFE",
                abu: "#F0F0F0",
                emas: "#B38B59",
                hijau: "#113E21"
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/typography'),
    ],
}

