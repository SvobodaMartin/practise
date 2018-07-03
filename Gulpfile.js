/**GULP REQUIRES**/
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();  // npm install -save-dev browser-sync
var sass        = require('gulp-sass');         // npm install gulp-sass --save-dev
var concatCss   = require('gulp-concat-css');  // npm install --save-dev gulp-concat-css
var concat      = require('gulp-concat');  // npm install --save-dev gulp-concat
var newer       = require('gulp-newer');     // npm install gulp-newer --save-dev
var imagemin    = require('gulp-imagemin');  // npm install --save-dev gulp-imagemin
var gutil       = require('gulp-util');      // npm install --save-dev gulp-util
var ftp         = require( 'vinyl-ftp' );     // npm install --save-dev vinyl-ftp    
var uglify      = require('gulp-uglify');   //npm install --save-dev gulp-uglify
var cssmin      = require('gulp-cssmin'); // npm install --save-dev gulp-cssmin
var install     = require("gulp-install");


/** simplelightbox**/

//npm install simplelightbox

/**VARIABLES**/
var Dest = 'dist/';
var UploadSrc = 'dist/**';
var UploadDistCss = 'dist/css/**';
var UploadDistJs = 'dist/js/**';
var UploadDistImages = 'dist/images/**';
var UploadDest = '/httpdocs/';
var PhpSrc = './src/*.php';
var imgSrc = 'src/images/**';
var imgDest = 'dist/images';   
var SassSrc = './src/sass/**/*.scss'; 
var CssDest = './dist/css/';  
var CssSrc = './src/assets/css/*.css';  
var JsSrc = './src/js/*.js';  
var JsDest = 'dist/js/'; 
var projectPHPWatchFiles = './dist/*.php'; // Path to all PHP files.    
var Proxy = 'http://localhost/diverse-reality-new/dist/';

/***DO NOT EDIT****/
// Static Server for autoreload
gulp.task('serve',  function() {
 browserSync.init({
      proxy: Proxy, // makes a proxy for localhost:8080
      files: [projectPHPWatchFiles]
    });
});
// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
    return gulp.src(SassSrc)
          .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
          .pipe(gulp.dest(CssDest))
          .pipe(browserSync.stream());
});

//Merge css assets
gulp.task('mergeCss', function () {
    return gulp.src(CssSrc)
          .pipe(concatCss("./bundle.min.css"))
          .pipe(cssmin())
          .pipe(gulp.dest(CssDest));
});

// Minify js
gulp.task('minifyJs', function() {
  gulp.src(JsSrc)
    .pipe(uglify())
    .pipe(gulp.dest(JsDest))
});

//Copy  files on change
gulp.task('copyFile', function () {
   return gulp.src(PhpSrc)                                  
          .pipe(newer(Dest))
          .pipe(gulp.dest(Dest))
          .pipe(browserSync.reload);
});

//Compress images 
gulp.task('imageMin', function () {
    return gulp.src(imgSrc)
          .pipe(newer(imgDest))
          .pipe(imagemin([imagemin.optipng({optimizationLevel: 7})]))
          .pipe(gulp.dest(imgDest))
});


// Upload files to FTP
gulp.task('uploadFtp', function () {
   
    var conn = ftp.create( {
        host:     '176.227.168.98',
        user:     '',
        password: '',
        parallel: 10,
        log:      gutil.log
    } );
 
    var globs = [
        UploadSrc,
        UploadDistCss,
        UploadDistJs,
        UploadDistImages
        
    ];
 
  
 
    return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( UploadDest ) ) // only upload newer files 
        .pipe( conn.dest( UploadDest ) );
});



//Default task INIT
gulp.task('default', function() {
   gulp.start('serve','mergeCss','minifyJs','imageMin');
   gulp.watch(SassSrc, ['sass']);
   gulp.watch(imgSrc, ['imageMin']);
   gulp.watch(PhpSrc, ['copyFile']);
   gulp.watch(UploadSrc, ['uploadFtp']);
});





