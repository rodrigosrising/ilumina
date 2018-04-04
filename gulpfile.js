var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');

// Static Server + Watching scss files
gulp.task('serve', ['sass'], function(){

    browserSync.init({
        proxy: "http://localhost:8888/2018/clinica-ilumina/wordpress"
    });

    gulp.watch('*.php', function() {
      browserSync.reload();
    });

    gulp.watch("sass/*.scss", ['sass']);
});

//Compile sass into CSS
gulp.task('sass', function(){
    return gulp.src("style.scss")
        .pipe(sass())
        .pipe(gulp.dest("./"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);
