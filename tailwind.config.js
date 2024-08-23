/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors:{
      'gray' : '#171618',
      'card' : '#202127',
      'subtext': '#BCBDBE'
    },
    extend: {},
  },
  plugins: [],
}

