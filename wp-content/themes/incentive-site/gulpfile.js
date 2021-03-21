const gulp = require("gulp");
const sass = require("gulp-sass");
const sourcemaps = require("gulp-sourcemaps");
const cssnano = require("gulp-cssnano");
const uglify = require("gulp-uglify");
const rename = require("gulp-rename");

gulp.task("sass", function(done) {
    return gulp.src(["./src/sass/**/*.scss"])
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(cssnano())
    .pipe(sourcemaps.write("."))
    .pipe(gulp.dest("./dist/css"))
    done();
});



gulp.task("javascript", function(done) {
    return gulp
      .src(["./src/js/main.js"])
      .pipe(uglify())
      .pipe(
        rename({
          suffix: ".min"
        })
      )
      .pipe(gulp.dest("./dist/js"));
    done();
  });


gulp.task("watch", function() {
    gulp.watch(
        ["./src/sass/**/*.scss", "./src/js/**/*.js"], 
    gulp.series(["sass", "javascript"]))
});