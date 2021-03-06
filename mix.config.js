require('dotenv').config();
const path = require('path');
const siteUrl = new URL(process.env.SITE_URL);

const config = {
  publicPath: 'web/dist/',
  buildDir: process.env.ASSETS_URL,
  criticalDomain: siteUrl,
  criticalCssSuffix: '_critical.min',
  criticalCssUrls: [
    // { url: '/', template: 'homepage' },
    // { url: '/visit', template: 'landing' },
    // {
    //   url: '/visit/adelaide-botanic-garden/visitor-information/planning-your-visit',
    //   template: 'general'
    // }
  ],
  jsFramework: 'vue' // 'vue', 'react', or ''
};

const source = {
  scripts: path.resolve('src/js'),
  styles: path.resolve('src/css'),
  images: path.resolve('src/images'),
  static: path.resolve('src/static')
};

const devServer = {
  host: process.env.HMR_SHARED_HOST,
  port: process.env.HMR_PORT,
  path: process.env.ASSETS_URL,
  clientHost: siteUrl.host,
  protocol: process.env.HMR_HTTPS === 'true' ? 'https://' : 'http://',
  outputPath: function () {
    return `${this.protocol}${this.clientHost}:${this.port}${this.path}`;
  }
};

exports.config = config;
exports.source = source;
exports.devServer = devServer;
