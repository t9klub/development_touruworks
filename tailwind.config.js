/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
 
    extend: {
      colors:{
        'gray' : '#171618',
        'card' : '#202127',
        'subtext': '#BCBDBE'
      },
    },
  },
  plugins: [],
}

