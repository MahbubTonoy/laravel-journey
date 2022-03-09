const path = require("path");

let wp = {
  entry: "./res/js/app.js",
  output: {
    path: path.resolve(__dirname, 'dist/js/'),
    filename: 'app.bundle.js'
  },
  mode: 'production',
  module: {
    rules: [
      {
        
      }
    ]
  }
}
module.exports = wp;