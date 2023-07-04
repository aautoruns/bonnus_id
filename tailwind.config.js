/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ['index.html', 'learning.html', './node_modules/flowbite/**/*.js'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      backgroundImage: {
        card1: "url('https://user-images.githubusercontent.com/96577430/230725707-02add798-5729-415e-a29a-5d37d85de97e.png')",
        card2: "url('https://user-images.githubusercontent.com/96577430/230726224-55e519a3-3e9b-4604-978b-f8464679d210.png')",
        card3: "url('https://user-images.githubusercontent.com/96577430/230726228-bcecc78e-5d69-4d0d-aba7-4975d0a7e009.png')",
        card4: "url('https://user-images.githubusercontent.com/96577430/230726231-6f8d12fc-7f80-4473-bf11-b2b00a7165f9.png')",
      },
      colors: {
        primary: '#134e4a',
        secondary: '#808080',
        charlie: '#d1d5db',
        dark: '#010101',
      },
      screens: {
        sm: '480px',
        md: '768px',
        lg: '976px',
        xl: '1440px',
        '2xl': '1320px',
      },
      fontSize: {
        xxs: '1px',
      },
    },
  },
  plugins: [require('flowbite/plugin')],
};
