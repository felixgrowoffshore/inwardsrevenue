var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');

var paths = {
  javascript: ['library/development/js/**/*.js'],
  theme: 'library/development/scss/style.scss',
  fontAwesome: 'library/development/scss/font-awesome/font-awesome.scss',
  watch: 'library/development/scss/**/*.scss'
}

gulp.task('scripts', function() {
  gulp.src(paths.javascript)
    .pipe(uglify())
    .pipe(concat('theme-scripts.min.js'))
    .pipe(gulp.dest('./js'));
});

gulp.task('theme', function() {
  gulp.src([paths.theme, paths.fontAwesome])
    .pipe(sass({
      compress: true
    }).on('error', sass.logError))
    // .pipe(minifyCSS())
    .pipe(gulp.dest('./css'));
});

gulp.task('watch', function() {
  gulp.watch(paths.javascript, ['scripts']);
  gulp.watch(paths.watch, ['theme'])
});

gulp.task('default', ['watch', 'theme', 'scripts'])
