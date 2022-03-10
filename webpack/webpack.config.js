const path = require("path");

let wp = {
  entry: "./res/js/app.js",
  output: {
    path: path.resolve(__dirname, 'dist/js/'),
    filename: 'app.bundle.js'
  },
  mode: 'production',
  modules: {
    rules: [
      {
        test: /\.js$/,
        use: {
          loader: 'babel-loader',
          options: {
            preset: ['@babel/presets-env']
          }
        }
      }
    ]
  }
}
module.exports = wp;