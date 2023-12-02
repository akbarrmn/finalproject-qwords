/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            content: {
                captions: "url('./public/assets/images/capt.png')",
            },
        },
        animation: {
            marquee: "marquee 25s linear infinite",
            marquee2: "marquee2 25s linear infinite",
            reverseMarque: "reverseMarque 25s linear infinite",
            reverseMarque2: "reverseMarque2 25s linear infinite",
            zoomIn: "zoomIn 1s ease-in-out infinite",
        },
        keyframes: {
            marquee: {
                "0%": { transform: "translateX(0%)" },
                "100%": { transform: "translateX(100%)" },
            },
            marquee2: {
                "0%": { transform: "translateX(-100%)" },
                "100%": { transform: "translateX(0%)" },
            },
            reverseMarque: {
                "0%": { transform: "translateX(0%)" },
                "100%": { transform: "translateX(-100%)" },
            },
            reverseMarque2: {
                "0%": { transform: "translateX(100%)" },
                "100%": { transform: "translateX(0%)" },
            },
            zoomIn: {
                "0%": { transform: "scale(0.9)" },
                "25%": { transform: "scale(1)" },
                "60%": { transform: "scale(0.9)" },
                "100%": { transform: "scale(0.9)" },
            },
        },
    },
    plugins: [require("daisyui")],
    daisyui: {
        themes: false,
    },
};
