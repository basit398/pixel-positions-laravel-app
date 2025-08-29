//  {import('tailwindcss').config}

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    
  ],
  theme: {
    extend: {
      colors: {
        "black": "#060606" // custom black color
      },
        
    },
  },
  plugins: [],
}
