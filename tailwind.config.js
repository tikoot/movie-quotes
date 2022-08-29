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
        'gray': '#404040',
        'dark-gray': '#d4d4d4'
        },
    },
  },
  plugins: [],
}
