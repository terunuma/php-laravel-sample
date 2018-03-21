var gulp             = require('gulp');
var plumber          = require('gulp-plumber');
var notify           = require('gulp-notify');
var imagemin         = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var spritesmith      = require('gulp.spritesmith');
var dateStamp        = ((new Date()).getTime());
var buffer           = require('vinyl-buffer');
var del              = require('del');


// 画像を圧縮する
gulp.task("compress-png", function() {
    const srcDir = './resources/assets/compress-png/original/';
    const destDir = './resources/assets/compress-png/compressed/';
    gulp.src(srcDir + "**")
        .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
        .pipe(imagemin(
            [imageminPngquant({quality: '65-80', speed: 4})]
        ))
        // .pipe(imageminPngquant({quality: '65-80', speed: 4})())
        .pipe(gulp.dest(destDir));
});

// スプライトを生成する
gulp.task('sprite-all', function() {
    const spriteImgName = 'all'+ dateStamp +'.png';
    const spriteDir  = './public/assets/images/sprites/';
    const destDir    = './public/assets/images/sprites-dest/';
    const lessDestDir = './resources/assets/less/common/foundation/';

    del([destDir + '*.png']);

    const spriteData = gulp.src([spriteDir + "*.png"])
        .pipe(plumber({errorHandler: notify.onError('<%= error.message %>')}))
        .pipe(spritesmith({
            imgName: spriteImgName, //スプライトの画像
            cssName: '_sprite_variables.less', //生成されるless
            imgPath: '/assets/images/sprites-dest/'+ spriteImgName, //lessに記載されるパス
            padding: 4,
            cssFormat: 'less', //フォーマット
            cssVarMap: function (sprite) {
                sprite.name = sprite.name; //lessにいろいろな変数の一覧を生成
            }
        }));
    spriteData.img
        .pipe(buffer())
        .pipe(imagemin(
            [imageminPngquant({quality: '65-80', speed: 4})]
        ))
        .pipe(gulp.dest(destDir)); //生成された画像のパス

    spriteData.css
        .pipe(gulp.dest(lessDestDir)); //sprite.lessのパス
});

gulp.task('sprite',['sprite-all', 'css']);