/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/js/**/*.vue",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],
    theme: {
        extend: {},
    },
    plugins: [require("@tailwindcss/forms")],
};
