var nunjucksRender = require('gulp-nunjucks-render');
var gulp = require('gulp');
var concatCss = require('gulp-concat-css');
var minifyCss = require('gulp-cssmin');
var htmlreplace = require('gulp-html-replace');
var uglify = require('gulp-uglifyjs');
var copy = require('gulp-copy');
var purify = require('gulp-purifycss');
var data = require('gulp-data');
var htmlmin = require('gulp-htmlmin')
var shorthand = require('gulp-shorthand');


var pipes = {};

pipes.htmlmin = function () {
    return gulp.src('./*.html')
        .pipe(htmlreplace({
            'cssasset': 'css/asset.css',
            'cssstyle': 'css/style.css',
            // 'jsasset': 'js/asset.js',
            // 'jsscript': 'js/script.js',
        }))
        // .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist/'));
}

var css = {
    asset: [' css/animate.css', 'css/bootstrap.min.css', 'css/font-awesome.min.css', 'css/slicknav.css'],
    style: ['css/style.css', 'css/nav.css', 'css/green.css']
}

pipes.cssasset = function () {

    return gulp.src(css.asset)
        .pipe(concatCss('asset.css'))
        .pipe(minifyCss())

        // .pipe(purify(['dist/*.html']))
        .pipe(gulp.dest('dist/css/'));
}

pipes.cssstyle = function () {

    return gulp.src(css.style)
        .pipe(concatCss('style.css'))
        .pipe(purify(['dist/*.html']))
        .pipe(shorthand())
        .pipe(minifyCss())


        .pipe(gulp.dest('dist/css/'));
}

pipes.copy = function () {

    return gulp.src(["./{fonts,images,documents}/*"])
        .pipe(copy("./dist/", { prefix: 0 }))

}



var scripts = {
    asset: [
        'js/jquery-2.1.4.min.js',
        'js/bootstrap.min.js',
        'js/contact.js',
        'js/count-to.js',
        'js/gallery.js',
        'js/jquery-migrate-1.2.1.min.js',
        'js/jquery.appear.js',
        'js/jquery.easypiechart.js',
        'js/jquery.easypiechart.min.js',
        'js/jquery.fitvids.js',
        'js/jquery.isotope.js',
        'js/jquery.isotope.min.js',
        'js/jquery.lettering.js',
        'js/jquery.migrate.js',
        'js/jquery.nicescroll.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.parallax.js',
        'js/jquery.slicknav.js',
        'js/jquery.textillate.js',
        'js/mediaelement-and-player.js',
        'js/modernizrr.js',
        'js/nivo-lightbox.js',
        'js/nivo-lightbox.min.js',
        'js/owl.carousel.js',
        'js/owl.carousel.min.js',
    ],
    script: 'js/script.js'
}

pipes.jsasset = function () {
    gulp.src(scripts.asset)
        .pipe(uglify('asset.js'))
        .pipe(gulp.dest('dist/js/'))
}

pipes.jsscript = function () {
    gulp.src(scripts.script)
        .pipe(uglify('script.js'))
        .pipe(gulp.dest('dist/js/'))
}

pipes.sass = function () {

    return gulp.src('./assets/sass/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./assets/css/'))

}


gulp.task('htmlmin', pipes.htmlmin);
gulp.task('cssasset', pipes.cssasset);
gulp.task('jsasset', pipes.jsasset);
gulp.task('jsscript', pipes.jsscript);
gulp.task('cssstyle', pipes.cssstyle);
gulp.task('jsmin', pipes.jsmin);
gulp.task('copy', pipes.copy);
gulp.task('sass', pipes.sass);

gulp.task('default', ['nunjucks', 'cssmin', 'jsmin', 'copy']);




