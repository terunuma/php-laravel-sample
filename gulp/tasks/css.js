var gulp           = require('gulp');
var watch          = require('gulp-watch');
var size           = require('gulp-size');
var sourcemaps     = require('gulp-sourcemaps');
var plumber        = require('gulp-plumber');
var filter         = require('gulp-filter');
var notify         = require('gulp-notify');
var less           = require('gulp-less');
var lessDependents = require('gulp-less-dependents');
var pleeease       = require('gulp-pleeease');

gulp.task('css', function () {
    var sources = [
        './resources/assets/less/app.less',
    ];

    var gulpSrc;
    var plumberTask = plumber({
        errorHandler: notify.onError("Error: <%= error.message %>")
    });

    if (process.env.GAMEWITH_CSS_WATCH) {
        gulpSrc = gulp.src(sources)
            .pipe(plumberTask)
            .pipe(watch('./resources/assets/less/**/*.less'))
            .pipe(lessDependents())
            .pipe(filter(['**', '!resources/assets/less/*/**/*.less']));
    } else {
        gulpSrc = gulp.src(sources)
            .pipe(plumberTask);
    }

    return gulpSrc
        .pipe(less())
        .pipe(pleeease({
            autoprefixer: {'browsers': ['last 3 versions','ie >= 11','iOS >= 6','Android >= 4.0']}
        }))
        .pipe(gulp.dest('./public/css/dist/'))
        .pipe(size({ title: '⛄ ', showFiles: true, gzip: true}));
});
