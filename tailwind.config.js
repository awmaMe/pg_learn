/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            animation: {
                toast: "slide-up-down 4s ease-out",
            },
            keyframes: {
                "slide-up-down": {
                    "0%, 100%": {
                        transform: "translate(50%, 0)",
                        duration: "20%",
                        opacity: 0,
                    },
                    "20%, 50%, 80%": {
                        transform: "translate(50%, -4rem)",
                        opacity: 1,
                    },
                },
            },
        },
    },
    plugins: [],
};
