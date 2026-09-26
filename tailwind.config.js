/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        saltora: {
          bg: '#F8F5EF',
          card: '#F0EAE1',
          blush: '#F4E8E5',
          'blush-light': '#FBF6F4',
          terracotta: '#964B42',
          'terracotta-dark': '#803D35',
          dark: '#1C1917',
          'dark-card': '#272320',
          'dark-border': '#3D3733',
          border: '#E5DED5',
          text: '#292524',
          muted: '#66605B',
          'muted-light': '#8C847D',
        }
      },
      fontFamily: {
        serif: ['Cormorant Garamond', 'Playfair Display', 'Georgia', 'serif'],
        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
      },
      letterSpacing: {
        widest: '.2em',
        mega: '.3em',
      }
    },
  },
  plugins: [],
}
