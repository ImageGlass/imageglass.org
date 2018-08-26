var path = require("path")


const UglifyJsPlugin = require("uglifyjs-webpack-plugin");
const OptimizeCSSAssetsPlugin = require("optimize-css-assets-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin")


module.exports = {
	entry: ["babel-polyfill", path.resolve(__dirname, "./resources/assets/js/main.js")],
	output: {
		path: path.resolve(__dirname, "../public"),
		filename: "./js/bundle.js"
	},
	module: {
		
		rules: [
			{ test: /\.js$/, loader: "babel-loader", exclude: /node_modules/ },
			{ test: /\.jsx$/, loader: "babel-loader", exclude: /node_modules/ },
			{
				test: /\.(scss|css)$/,
				use: [
					MiniCssExtractPlugin.loader,
					{
						loader: "css-loader",
						options: {
							url: false,
							sourceMap: true,
						}
					},
					{
						loader: "sass-loader",
						options: {
							sourceMap: true,
						}
					},
				]
			},
			{
				test: /\.(png|jpg|gif|svg|ico)$/,
				use: {
					loader: "file-loader",
					options: {
						outputPath: "./img/",
						name: "[name].[ext]",
					}
				}
			},
			{
				test: /\.(eot|ttf|woff|woff2)$/,
				use: {
					loader: "file-loader",
					options: {
						outputPath: "./fonts/",
						name: "[name].[ext]",
					}
				}
			},
		]
	},
	stats: {
		colors: true
	},
	devtool: "source-map",
	optimization: {
		minimizer: [
			new UglifyJsPlugin({
				cache: true,
				parallel: true,
				sourceMap: true // set to true if you want JS source maps
			}),
			new OptimizeCSSAssetsPlugin({})
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			// Options similar to the same options in webpackOptions.output
			// both options are optional
			filename: "./css/[name].css",
			
		})
	],
}
