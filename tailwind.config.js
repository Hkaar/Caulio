/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: "2rem",
      },
      colors: {
        "primary": "#1B1A55",
        "secondary": "#535C91",
        "accent": "#9290C3",
        "error": "#E61B37",
        "warning": "#FFA500",
        "success": "#267D48",
        "info": "#1FA2E2"        
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"]
      }
    },
  },
  plugins: [],
}

