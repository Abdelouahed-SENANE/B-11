/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily : {
            "inter" : 'Inter'
        },
        extend: {
            backgroundImage : {
                'landing': "url('/images/background.jpg')",

            }
        },
    },
    plugins: [],
}
