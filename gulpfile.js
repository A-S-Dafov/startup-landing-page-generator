const gulp = require('gulp');
const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
const babel = require('gulp-babel');

// gulp.task - Define tasks
// gulp.src - Points to files to use
// gulp.dest - Points to folders to output
// gulp.watch - Watch files and folder for changes


// Copy all HTML files
gulp.task('copyHtml', () => {
    gulp.src('src/*.html')
        .pipe(gulp.dest('dist'));
});

// Copy all PHP files
gulp.task('copyPhp', () => {
    gulp.src('src/server/**/*')
        .pipe(gulp.dest('dist/server/'));
});

// Optimize images
gulp.task('imageMin', () => {
    gulp.src('src/images/*')
        .pipe(imagemin())
        .pipe(gulp.dest('dist/images'));
});

// Compile Sass
gulp.task('sass', () => {
    gulp.src('src/styles/*.scss')
        .pipe(concat('styles.scss'))
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/styles'))
});

// Scripts Concatentaion and Minification
gulp.task('scripts', () => {
    gulp.src('src/scripts/*.js')
        .pipe(concat('main.js'))
        .pipe(babel({
            presets: ['env']
        }))
        .pipe(uglify())
        .pipe(gulp.dest('dist/scripts'))
});

gulp.task('default', ['copyHtml', 'copyPhp', 'imageMin', 'sass', 'scripts']);