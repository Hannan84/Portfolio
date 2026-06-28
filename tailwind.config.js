import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.js',
        './resources/**/*.css',
        './resources/views/**/*.blade.php',
        './resources/views/**/*.php',
        './resources/images/**/*.{jpg,jpeg,png,svg,gif}',
    ],

    theme: {
        extend: {
            colors: {
                portfolio: {
                    bg: '#0a1628',
                    card: '#111f33',
                    accent: '#00d4aa',
                    'accent-hover': '#14b8a6',
                    text: '#e2e8f0',
                    muted: '#94a3b8',
                }
            },
            fontFamily: {
                sans: ['Inter', 'Outfit', ...defaultTheme.fontFamily.sans],
                outfit: ['Outfit', 'Inter', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                hide: {
                    '0%, 80%': { opacity: '1', transform: 'scale(1)' },
                    '100%': { opacity: '0', transform: 'scale(0.95)' },
                },
                blob: {
                    "0%": {
                        transform: "translate(0px, 0px) scale(1)"
                    },
                    "33%": {
                        transform: "translate(30px, -50px) scale(1.1)"
                    },
                    "66%": {
                        transform: "translate(-20px, 20px) scale(0.9)"
                    },
                    "100%": {
                        transform: "translate(0px, 0px) scale(1)"
                    }
                }
            },
            animation: {
                hide: 'hide 4s ease-in-out forwards', // 4s total, fades at the end
                blob: "blob 7s infinite"
            },
        },
    },

    plugins: [forms],
};
