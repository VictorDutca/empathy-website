const {
    dest,
    watch,
    src,
    parallel
} = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const webpack = require('webpack-stream');
const babel = require('gulp-babel');
const browsersync = require("browser-sync").create();
const notify = require('gulp-notify');
const cssimport = require("gulp-cssimport");
const webp = require('gulp-webp');
const newer = require('gulp-newer');
const autoprefixer = require('gulp-autoprefixer');
const criticalCss = require('gulp-penthouse');

// Insert here your development domain
var devsite = 'ai-empathy.com'

// BrowserSync
function browserSync(done) {
    browsersync.init({
        open: 'external',
        host: devsite,
        proxy: "https://" + devsite,
        online: false,
        tunnel: false,
        ui: false,
        ghostMode: {
            clicks: true,
            forms: true,
            scroll: true,
            location: true
        },
        // browser: ["safari", "google chrome", "firefox"],
        notify: false,
        // port: 80,
        // httpModule: 'http2',
        // https: true
    });
    done();
}

// styles
function styles() {
    return src(['./assets/scss/*.scss'])
    .pipe(plumber({
        errorHandler: function (err) {
            notify.onError({
                title: "Gulp error in " + err.plugin,
                message: err.toString()
            })(err);
        }
    }))
    .pipe(sass({ outputStyle: 'compressed', }).on('error', sass.logError))
    .pipe(cssimport())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(dest("./dist/css"))
    .pipe(browsersync.stream())
};

// js
function js() {
    return src(['./assets/js/**.js'])
        .pipe(plumber({
            errorHandler: function (err) {
                notify.onError({
                    title: "Gulp error in " + err.plugin,
                    message: err.toString()
                })(err);
            }
        }))
        .pipe(webpack({
            watch: false,
            mode: "production",
            entry: {
                main: './assets/js/main.js',
            },
            output: {
                filename: "[name].min.js",
            },
            devtool: "source-map",
            performance: { hints: false },
            module: {
                rules: [{
                    test: /\.(js|jsx)$/,
                    exclude: /(node_modules)/,
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['@babel/preset-env'],
                            plugins: ['@babel/plugin-proposal-class-properties']
                        }
                    }
                },],
            },
            resolve: {
                modules: ['node_modules'],
            }
        }))
        .pipe(dest('./dist/js'))
        .pipe(browsersync.stream());
}

// image WebP
function imageWebP() {
   return src(['./assets/images/**/*'])
   .pipe(webp())
    .pipe(dest('dist/images'))
    .pipe(browsersync.stream());
};

//fonts
function fonts() {
    return src('./assets/fonts/*.{eot,svg,ttf,otf,woff,woff2}')
        .pipe(newer('./dist/fonts'))
        .pipe(dest('./dist/fonts'));
}

//media
function media() {
    return src('./assets/video/*.{mp4,ogg,webp}')
        .pipe(newer('./dist/video'))
        .pipe(dest('./dist/video'))
}

// icons
function icons() {
    return src('./assets/images/icons/*.*')
        .pipe(newer('./dist/images/icons'))
        .pipe(dest('./dist/images/icons'))
}

// svg
function svg() {
    return src('./assets/images/vectors/*.*')
        .pipe(newer('./dist/images/vectors'))
        .pipe(dest('./dist/images/vectors'))
}

// PHP
function php() {
    return src(['./**/*.php'])
        .pipe(browsersync.stream());
}

// Watch files
function watchFiles() {
    watch("./**/*.php", parallel(php, styles, js));
    watch("./assets/scss/**/*.scss", parallel(php, styles, js));
    watch("./assets/images/**/*.{png,jpg,jpeg,tiff}", imageWebP);
    watch("./assets/video/**/*.{gif,mp4,ogg,webp}", media);
    watch("./assets/images/vectors/*.svg", svg);
    watch("./assets/images/icons/*.*", icons);
    watch("./assets/js/**/*.js", parallel(php, styles, js));
    // .pipe(notify('CSS Compiled'));

}


exports.default = parallel(browserSync, php, styles, js, imageWebP, fonts, media, svg, icons, watchFiles);
exports.build = parallel(php, styles, js, imageWebP, fonts, media, svg, icons);
