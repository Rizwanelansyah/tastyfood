/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "resources/**/*.blade.php"
    ],
    theme: {
        extend: {
            colors: {
                'primary': "#f4f4f4",
            },
            animation: {
                'spinner': 'spin 200s linear 0s infinite',
            },
        },
    },
    plugins: [],
}

