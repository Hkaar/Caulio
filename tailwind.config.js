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
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      animation: {
        sink: "sink 3s infinite ease-in-out",
      },
      keyframes: {
        sink: {
          "0%": {
            "transform": "translateY(-10px)"
          },
          "50%": {
            "transform": "translateY(0)"
          },
          "100%": {
            "transform": "translateY(-10px)"
          }
        }
      },
    },
  },
  plugins: [require("daisyui")],
  daisyui: {
    themes: [
      "business",
      "corporate",
    ],
  },
};
