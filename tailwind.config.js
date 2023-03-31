/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    theme: {
        extend: {},
    },
    theme: {
        extend: {
            colors: {
                primary: {
                    base: "#F44A33",
                    light: "#ff44d57",
                    dark: "#B71C1C",
                },
            },
        },
    },
    plugins: [],
};
