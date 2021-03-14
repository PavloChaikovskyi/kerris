const gulp = require('gulp');
// minify JS
const uglify = require('gulp-uglify');
// convert scss to css
const sass = require('gulp-sass')
// rename extention
const rename = require('gulp-rename');
// delite files
const del = require('del');
// add sourcemaps to min.css
const sourcemaps = require('gulp-sourcemaps');
// browserSync 
const browserSync = require('browser-sync').create();

const scssWatcher = gulp.watch(['assets/src/scss/*.scss']); 
const phpWatcher = gulp.watch(['./*.php'])
const scriptsWatcher = gulp.watch(['assets/src/js/*.js'])

function styles() {
    return gulp.src(['assets/src/scss/*.scss', '!assets/src/scss/**/_*'])
        .pipe(sass({outputStyle:'compressed',}).on('error', sass.logError))
        .pipe(rename({ extname: '.min.css' }))
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('assets/dist/css'))
}

// function scripts() {

// }


function clean() {
    return del(['assets/dist/',])
}

function watch() { 
    browserSync.init({proxy: 'http://localhost:8888/kerris/', online: true})
    scssWatcher.on('change', gulp.series(clean, styles, browserSync.reload))
    phpWatcher.on('change', browserSync.reload)
}

exports.default = gulp.series(clean, styles, watch)
