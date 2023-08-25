
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      boxShadow: {
        "custom": '0 50px 100px -24px rgb(0 0 0 / 0.3)'
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'purple': '#3f3cbb',
        'midnight': '#121063',
        'metal': '#565584',
        'tahiti': '#3ab7bf',
        'silver': '#ecebff',
        'bubble-gum': '#ff77e9',
        'bermuda': '#78dcca',
        'blue' : '#3b82f6',
        'slate' : '#475569',
        'black' : ' #020617',
        
      },

      keyframes: {
        'trans-bounce' :{
          '0%, 100%' : {transform: 'translateY(30px)'},
          '50%' :{transform:'translateY(0px)'}
        }
      },
      animation: {
        'trans-bounce' : 'trans-bounce 1.5s ease-in-out infinite'
      }
    },
  },
  plugins: [],

}

