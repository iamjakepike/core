module.exports = {
    content: require('fast-glob').sync(
      ["./**/*.{html,php}"],
    ),
    safelist: [
    ],
    theme: {
      extend: {},
    },
    plugins: []
  }
  