/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#570F0F",
                "primary-soft": "#FAF6F0", // background krem hero
                muted: "#6B4423",
            },
        },
    },
    plugins: [],
};
