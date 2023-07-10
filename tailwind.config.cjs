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

    },
    plugins: [
        require('flowbite/plugin'),
        // require('@tailwindcss/forms'),
    ],
}

