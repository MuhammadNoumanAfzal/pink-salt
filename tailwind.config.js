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
          dark: '#111111',
          'dark-card': '#1C1917',
          'dark-border': '#292524',
          border: '#DCD4C9',
          text: '#000000',
          muted: '#111111',
          'muted-light': '#222222',
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
