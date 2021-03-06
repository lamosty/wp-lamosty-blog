var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');

var assetsPath = './';
var destPath = '../dist';

gulp.task('sass', function () {
    gulp.src(assetsPath + '/sass/**/*.scss')
        .pipe(watch(assetsPath + '/sass/**/*.scss', function(files) {
            return files
                .pipe(sass())
                .pipe(gulp.dest(destPath + '/css'));
        }))
        .pipe(sass())
        .pipe(gulp.dest(destPath + '/css'));
});
