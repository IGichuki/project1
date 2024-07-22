/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
  ],
  theme: {
    extend: {
      colors: {
        headerGrey: '#282A36',
        bodyGrey: '#232530',
        red: '#FF0000',
      },
      boxShadow: {
        'custom': '0 3px 10px 3px rgba(207, 207, 207, 0.2)',
      }
    },
  },
  plugins: [],
}

