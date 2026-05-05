/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/views/**/*.blade.php',
        './app/**/*.php',
        './config/**/*.php',
    ],
    theme: {
        extend: {
            colors: {
                'brand-red': '#ED1C24',
                'brand-hover': '#D31219',
                'brand-dark': '#B80000',
            },
            fontFamily: {
                sans: ['Sarabun', 'Inter', 'Arial', 'Helvetica', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
