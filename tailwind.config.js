module.exports = {
    darkMode: 'class', // Add this line
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...require('tailwindcss/defaultTheme').fontFamily.sans],
            },
            colors: {
                dark: '#1e1e1e',
                darker: '#121212',
                primary: '#f97316',
                card: '#2a2a2a'
              },
        },
    },
    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography')
    ],
};
