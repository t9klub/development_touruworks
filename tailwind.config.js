/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')

export default {
  content: [
    "./Resources/**/*.blade.php",
    "./Resources/**/*.js",
    "./Resources/**/*.vue",
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

