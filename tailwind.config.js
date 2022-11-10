/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            'sansation': ['Sansation', 'sans-serif']
        }
    },
  },
  plugins: [
      require('@tailwindcss/forms'),
  ],
}
