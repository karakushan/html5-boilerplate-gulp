var gulp = require('gulp'),
  spritesmith = require('gulp.spritesmith'),
  uglify = require('gulp-uglify'),
  concat = require('gulp-concat'),
  browserSync = require('browser-sync').create(),
  sass = require('gulp-sass'),
  sourcemaps=require('gulp-sourcemaps');

sass.compiler = require('node-sass');

// Конфигурация проекта
var config = {
  proxy: 'kids-teatr.loc',
  jsSrc: ['./src/js/**/*.js'],
  scssSrc: ['./src/scss/*.scss'],
  outJsPath: './js',
  outJsFile: 'main.js',
  iconPath: './src/img/icons/*.png',
  spriteOutPath: './css',
  cssOutPath: './css'
}

// Автоматическое создание спрайтов
function sprite() {
  var spriteData = gulp.src(config.iconPath)
    .pipe(spritesmith({
      imgName: 'sprite.png',
      cssName: 'sprite.css',
      cssVarMap: function (sprite) {
        if (sprite.name.indexOf('-hover') !== -1) {
          sprite.name = 'icon-' + sprite.name.replace('-hover', ':hover');
        } else {
          sprite.name = 'icon-' + sprite.name;
        }
      },
      imgPath: 'sprite.png',
      cssOpts: {
        cssSelector: function (item) {
          // If this is a hover sprite, name it as a hover one (e.g. 'home-hover' -> 'home:hover')
          if (item.name.indexOf('-hover') !== -1) {
            return '.icon-' + item.name.replace('-hover', ':hover');
            // Otherwise, use the name as the selector (e.g. 'home' -> 'home')
          } else {
            return '.' + item.name;
          }
        }
      }
    }));

  return spriteData.pipe(gulp.dest(config.spriteOutPath));
}

// Минификация и объединение всех js файлов
function minifyJs() {
  return gulp.src(config.jsSrc)
    .pipe(concat(config.outJsFile))
    .pipe(uglify())
    .pipe(gulp.dest(config.outJsPath))

}

function gulpSass() {
  return gulp.src(config.scssSrc)
    .pipe(sourcemaps.init())
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(config.cssOutPath))
    .pipe(browserSync.stream());
}

// Отслеживание изменений и перекомпоновка
function watch() {
  gulp.watch(config.iconPath, gulp.series(sprite));
  gulp.watch(config.jsSrc, gulp.series(minifyJs));
  gulp.watch(config.scssSrc, gulp.series(gulpSass));
  browserSync.init({
    proxy: config.proxy,
    files: ["css/*.css", "*.php", "*/*.php", "js/*.js", "*.html"],
  });
}



exports.sprite = sprite;
exports.watch = watch;
exports.minifyJs = minifyJs;
exports.gulpSass = gulpSass;

exports.default = gulp.series(sprite, minifyJs, gulpSass, watch);
