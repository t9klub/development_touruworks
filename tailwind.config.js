/** @type {import('tailwindcss').Config} */

const colors = require('tailwindcss/colors')
const withMT = require("@material-tailwind/react/utils/withMT");
 
export default withMT({
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
});

