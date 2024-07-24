/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'allu': ['Allura'],
      'mont': ['Montserrat'],
      'popp':["Poppins"]
    },
    extend: {
      width: {
        '128': '76rem',
        '127': '38rem',
        '126': '25rem',
      },

      height: {
        '128': '76rem',
        '127': '38rem',
        '126': '25rem',
      }
    },
  },
  variants: {
    extend: {
      display: ['group-focus']
    },
  },
  plugins: [],
}