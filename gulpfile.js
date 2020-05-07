const gulp = require('gulp');
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();

function bootstrapJs() {
    return gulp.src('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')
        .pipe(gulp.dest('assets/js'));
}

function style() {
    return gulp.src('assets/scss/**/*.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }).on('error', sass.logError))
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}

function watch() {
    browserSync.init({
        ui: false,
        proxy: {
            target: "localhost:6500",
        }
    });
    gulp.watch('assets/scss/**/*.scss', style);
    gulp.watch(['page-templates/*.php']).on('change', browserSync.reload);
    gulp.watch(['shared/*.php']).on('change', browserSync.reload);
    gulp.watch(['*.php']).on('change', browserSync.reload);
}

exports.bootstrapJs = bootstrapJs;
exports.style = style;
exports.watch = watch;