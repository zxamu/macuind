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
            colors:{
                'myblueg' : '#7abaca',
                'myblueg2' : '#4257b1'
            }
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('@tailwindcss/forms')
    ],
}

