'use strict';

var gulp        = require('gulp');
var browserify  = require('browserify');
var babelify    = require('babelify');
var source      = require('vinyl-source-stream');
var buffer      = require('vinyl-buffer');
var uglify      = require('gulp-uglify');
var sourcemaps  = require('gulp-sourcemaps');
var sass        = require('gulp-sass');
var minifyCss   = require('gulp-minify-css');
var concat      = require('gulp-concat');
var rename      = require('gulp-rename');

gulp.task('js', function () {
  return browserify({entries: './assets/scripts/app.js', debug: true})
    .transform("babelify", { presets: ["es2015"] })
    .bundle()
    .pipe(source('app.js'))
    .pipe(buffer())
    //.pipe(uglify())
    .pipe(gulp.dest('./assets/build'))
    .pipe(sourcemaps.init({ loadMaps: true }))
    .pipe(sourcemaps.write('./maps'));
});

gulp.task('scss', function() {
  return gulp.src('./assets/styles/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(minifyCss())
    .pipe(concat('app.css'))
    .pipe(rename({
      basename : 'style',
      extname : '.min.css'
    }))
    .pipe(gulp.dest('./assets/build'));
});

gulp.task('watch', ['js', 'scss'], function () {
  gulp.watch('./assets/scripts/**/*.js', ['js']);
  gulp.watch('./assets/styles/**/*.scss', ['scss']);
});

gulp.task('default', ['build', 'watch']);