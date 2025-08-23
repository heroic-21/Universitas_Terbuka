const path = require("path");
const webpack = require("webpack");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const ImageMinimizerPlugin = require("image-minimizer-webpack-plugin");
const glob = require("glob");

module.exports = (env, argv) => {
  const isProduction = argv.mode === "production";

  return {
    entry: "./src/js/app.js",
    output: {
      path: path.resolve(__dirname, "dist"),
      filename: "js/app.bundle.js",
      clean: true,
    },
    devServer: {
      static: {
        directory: path.join(__dirname, "dist"),
      },
      compress: true,
      port: 9001,
      open: true,
      hot: true,
      client: {
        overlay: true,
        progress: true,
      },
      watchFiles: ["src/**/*.html", "src/**/*.scss"],
      devMiddleware: {
        writeToDisk: false,
      },
    },
    module: {
      rules: [
        {
          test: /\.(s[ac]ss|css)$/i,
          use: [
            isProduction ? MiniCssExtractPlugin.loader : "style-loader",
            "css-loader",
            "postcss-loader",
            "sass-loader",
          ],
        },
        {
          test: /\.html$/i,
          use: [
            {
              loader: "html-loader",
            },
          ],
        },
        {
          test: /\.(png|jpe?g|gif|svg|ico|eot|ttf|woff)$/i,
          type: "asset/resource",
          generator: {
            filename: (pathData) => {
              return `images${pathData.filename.replace("src/images", "")}`;
            },
          },
        },
        {
          test: /\.m?js$/,
          exclude: /node_modules/,
          use: {
            loader: "babel-loader",
            options: {
              presets: ["@babel/preset-env"],
            },
          },
        },
      ],
    },
    resolve: {
      extensions: [".js"],
    },
    plugins: [
      ...glob.sync("./src/**/*.html").map((file) => {
        return new HtmlWebpackPlugin({
          template: file,
          filename: path.basename(file),
          minify: isProduction
            ? {
                removeComments: true,
                collapseWhitespace: true,
                removeRedundantAttributes: true,
              }
            : false,
          cache: true,
        });
      }),
      new webpack.ProvidePlugin({
        $: "jquery",
        jQuery: "jquery",
        "window.jQuery": "jquery",
      }),

      ...(isProduction
        ? [
            new MiniCssExtractPlugin({
              filename: "css/app.min.css",
            }),
            new ImageMinimizerPlugin({
              minimizer: {
                implementation: ImageMinimizerPlugin.imageminMinify,
                options: {
                  plugins: [
                    ["mozjpeg", { quality: 65 }],
                    ["pngquant", { quality: [0.65, 0.75], speed: 4 }],
                    ["svgo", { removeViewBox: false }],
                    ["gifsicle", { interlaced: true, optimizationLevel: 2 }],
                    ["imagemin-webp", { quality: 70 }],
                  ],
                },
              },
              test: /\.(jpe?g|png|gif|svg)$/i,
            }),
          ]
        : []),
    ],
    mode: isProduction ? "production" : "development",
    cache: {
      type: "filesystem",
      buildDependencies: {
        config: [__filename],
      },
    },
    performance: {
      hints: isProduction ? "warning" : false,
      maxAssetSize: 512000,
      maxEntrypointSize: 512000,
    },
  };
};
