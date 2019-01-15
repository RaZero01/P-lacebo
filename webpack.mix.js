const mix = require('laravel-mix');
require('dotenv').config();

mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css').version();

let siteName = process.env.APP_NAME; // app name
let userName = process.env.USER; // developer local username

mix.browserSync({
    proxy: 'https://' + siteName + '.test',
    host: siteName + '.test',
    open: 'external',
    https: {
        key: '/Users/' + userName + '/.config/valet/Certificates/' + siteName + '.test.key',
        cert: '/Users/' + userName + '/.config/valet/Certificates/' + siteName + '.test.crt'
    }
});
