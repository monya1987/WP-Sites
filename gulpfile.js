'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var prefixer = require('gulp-autoprefixer');

gulp.task('default', function(){
	console.log('test');
});

gulp.task('sass', function(){
	return gulp.src('scss/*.scss')
	.pipe(sass({outputStyle: 'compressed'}))
	.pipe(prefixer())
	.pipe(gulp.dest(''))
});

gulp.task('watch', function() {
  gulp.watch('scss/**', ['sass']);
});
 
