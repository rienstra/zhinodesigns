/** @type {import('tailwindcss').Config} */

module.exports = {
    mode: 'jit',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    theme : {
        extend: {
            colors: {
                'primary': '#15ED92',
                'secondary': '#2D2D2D',
                'paragraph': '#475467',
                'dark-paragraph': '#F2F4F7',
                'gray-900': '#101828',
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        // require('@tailwindcss/forms'),
    ],
}

