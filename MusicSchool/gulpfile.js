'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const postcss = require('gulp-postcss');
const mqpacker = require('css-mqpacker');
const TARGET_BROWSERS = ['last 2 versions', 'ie >= 11'];
const imagemin = require('gulp-imagemin');

gulp.task('sass', function () {
  // コンパイル元のSCSSを指定
  return (
    gulp
      .src('./scss/**/*.scss')
      //  コンパイル時のアウトプットスタイルを指定
      .pipe(sass({ outputStyle: 'expanded' }))
      .pipe(autoprefixer(TARGET_BROWSERS))
      .pipe(postcss([mqpacker()]))
      // コンパイル先
      .pipe(gulp.dest('./css'))
  );
});
gulp.task('imagemin', function () {
  return gulp
    .src('./src/images/**/*.png')
    .pipe(imagemin())
    .pipe(gulp.dest('./images'));
});
// ファイル更新のタイミングで自動コンパイルさせる
gulp.task('watch', function () {
  gulp.watch('./scss/**/*.scss', gulp.task('sass'));
  gulp.watch('./src/images/**/*.png', gulp.task('imagemin'));
});
