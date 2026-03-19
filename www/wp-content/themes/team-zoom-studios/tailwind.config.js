/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: ["./**/*.php"],
  theme: {
    container: {
      center: true,
      padding: {
        DEFAULT: '1rem',
      }
    },
    extend: {
      colors: {
        'primary': {
          DEFAULT: "#CF9FFF",
        },
        'ss-blue': {
          DEFAULT: "#12598A",
        },
        'ss-yellow': {
          DEFAULT: "#FECE09",
        },
        'ss-orange': {
          DEFAULT: "#D39C74",
          100: "#E6A79B",
        },
        'ss-dark-gray': {
          DEFAULT: "#222222",
        }
      },
      screens: {
        '2xl': '1312px'
      },
      fontFamily: {
        'lead': ["Cormorant Garamond", ...defaultTheme.fontFamily.sans],
        'base': ["Mulish", ...defaultTheme.fontFamily.sans],
        'icomoon': ['icomoon'],
      },
    },
  },
  plugins: [],
}
