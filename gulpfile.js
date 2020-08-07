//gulpfile.js
var gulp = require('gulp'),
    minifyCSS = require('gulp-minify-css'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    prefix = require('gulp-autoprefixer'),
    rename = require("gulp-rename"),
    sass = require('gulp-sass');

 
// This is for the path of sass compilation
var sassFiles = 'dist/scss/style.scss',
    cssDest = 'dist/css/';

// This is for the process of sass compilation
gulp.task('styles', function () {
    gulp.src(sassFiles)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(cssDest));
});

// This is for the process of sass compilation
gulp.task('pages-styles', function () {
    gulp.src('dist/scss/pages/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/css/pages/'));
});

// This is for the minify css
//gulp.task('minify-css', () => {
  //return gulp.src(['dist/css/*.css','!dist/css/**/*.min.css'])
    //.pipe(cleanCSS({compatibility: 'ie8'}))
    //.pipe(rename({ suffix: '.min' }))
    //.pipe(gulp.dest('dist/css/'));
//});
gulp.task('minify-css', function(){
    return gulp.src(['dist/css/*.css','!dist/css/**/*.min.css'])
    .pipe(rename({ suffix: '.min' }))
    .pipe(minifyCSS())
    .pipe(gulp.dest('dist/css/'))
});
// This is for the minifyjs
gulp.task('js', function(){
    return gulp.src(['dist/js/custom.js','!dist/js/**/*.min.js'])
    .pipe(rename({ suffix: '.min' }))
    .pipe(uglify())
    .pipe(gulp.dest('dist/js/')) 
});
//Setting up the Watcher

gulp.task('watch', function() {
    gulp.watch(['dist/scss/**/*.scss', 'dist/js/**/*.js'], ['styles', 'js', 'pages-styles']);
    
});
gulp.task('watchcss', function() {
    gulp.watch(['dist/css/style.css'], ['minify-css']);
    
});

//Monitor

gulp.task('default', [ 'watch', 'watchcss']);
