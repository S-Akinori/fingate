/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        'base': '#111111',
        'base-color': '#111111',
        'base-cont': '#ffffff',
        'main': '#0B365C',
        'main-cont': '#111111',
        'accent': '#4A9500',
        'accent-cont': '#ffffff',
        'gray': '#AAAAAA29',
      },
    },
  },
  plugins: [],
}
