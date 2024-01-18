/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        brand: "#00CC99",
        primary: "#3464C3",
        secondary: "#008060",
        "secondary-dark": "#46D3CA",
        default: "#011B1A",
        bg: "#FEFFFE",
      },
      boxShadow: {
        window: "5px 5px 0px 0px rgba(0, 204, 153, 0.2)",
        windowhover: "8px 8px 8px 0px rgba(0, 204, 153, 0.2)",
      },
      opacity: {
        15: "0.15",
      },
    },
    container: {
      center: true,
      padding: "1rem",
    },
    fontSize: {
      xxs: ["0.625rem", "10px"],
      xs: ["0.75rem", "12px"],
      tag: ["0.875rem", "14px"],
      small: ["1rem", "19.2px"],
      medium: ["1.25rem", "24px"],
      large: ["1.5rem", "28.8px"],
      xl: ["2.25rem", "36px"],
      xxl: ["3rem", "48px"],
    },
    fontFamily: {
      sans: ["Inter"],
      serif: ["Times", "Times New Roman"],
      mono: ["input-mono-narrow"],
    },
  },
  plugins: [],
};
