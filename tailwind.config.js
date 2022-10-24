/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary-soft': "#FEECED",
        'primary-disabled': "#F9A0A6",
        'primary-main': "#F2404D",
        'primary-old': "#792027",
        'neutral-soft': "#FAFAFB",
        'neutral-disabled': "#F0F1F2",
        'neutral-main': "#6C757D",
        'neutral-old': "#212529"
      }
    },
  },
  plugins: [],
}
