'use strict';

var gulp = require('gulp'),
    watch = require('gulp-watch'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    rimraf = require('rimraf'),
    browserSync = require('browser-sync'),
    concat = require('gulp-concat'),
    mainBowerFiles = require('main-bower-files'),
    order = require('gulp-order'),
    reload = browserSync.reload,
    runSequence = require('run-sequence'),
    prompt = require('gulp-prompt'),
    conventionalGithubReleaser = require('conventional-github-releaser'),
    bump = require('gulp-bump'),
    gutil = require('gulp-util'),
    git = require('gulp-git'),
    credentials = require('./credentials.json'),
    cache = require('gulp-cache'),
    size = require('gulp-size'),
    changed = require('gulp-changed'),
    fs = require('fs');

require('gulp-task-list')(gulp, ['html:build', 'css:build', 'css:build', 'image:build', 'fonts:build', 'js:build',
    'github-release', 'watch', 'webserver', 'patch-version', 'minor-version', 'major-version', 'push-changes',
    'create-new-tag', 'create-commit']);

var path = {
    build: {
        html: 'build/',
        js: 'build/js/',
        css: 'build/css/',
        img: 'build/img/',
        fonts: 'build/fonts/'
    },
    src: {
        html: 'src/*.html',
        js: 'src/js/**/*.js',
        css: 'src/css/**/*.css',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    watch: {
        html: 'src/**/*.html',
        js: 'src/js/**/*.js',
        css: 'src/css/**/*.css',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*'
    },
    clean: './build'
};

var config = {
    server: {
        baseDir: './build'
    },
    tunnel: false,
    host: 'localhost',
    port: 9000,
    logPrefix: 'P-lacebo'
};

gulp.task('webserver', function () {
    browserSync(config);
});

gulp.task('clean', function (cb) {
    rimraf(path.clean, cb);
});

gulp.task('html:build', function () {
    gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    gulp.src(mainBowerFiles( { filter: "**/*.js",
        paths: {
            bowerDirectory: 'bower_components',
            bowerrc: '.bowerrc',
            bowerJson: 'bower.json'
        }}).concat(path.src.js))
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(gulp.dest(path.build.js))
        .pipe(reload({stream: true}));
});

gulp.task('css:build', function () {
    gulp.src(mainBowerFiles( { filter: "**/*.css",
        paths: {
            bowerDirectory: 'bower_components',
            bowerrc: '.bowerrc',
            bowerJson: 'bower.json'
        }}).concat(path.src.css))
        .pipe(order([
            'normalize.css',
            'fonts.css',
            '*'
        ]))
        .pipe(concat('main.css'))
        .pipe(prefixer())
        .pipe(cssmin())
        .pipe(gulp.dest(path.build.css))
        .pipe(reload({stream: true}));
});

gulp.task('image:build', function () {
    gulp.src(path.src.img)
        .pipe(changed(path.build.img))
        .pipe(imagemin([
            imagemin.gifsicle({interlaced: true}),
            imagemin.jpegtran({progressive: true}),
            imagemin.optipng({optimizationLevel: 5}),
            imagemin.svgo({
                plugins: [
                    {removeViewBox: true},
                    {cleanupIDs: false}
                ]
            })]))
        .pipe(gulp.dest(path.build.img))
        .pipe(size({title: 'img'}))
        .pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
    gulp.src(path.src.fonts)
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('build', function (cb) {
    runSequence(
        'html:build',
        'js:build',
        'css:build',
        'fonts:build',
        'image:build',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('Build successfully');
            }
            cb(error);
        }
    )
});


gulp.task('watch', function(){
    watch([path.watch.html], function(event, cb) {
        gulp.start('html:build');
    });
    watch([path.watch.css], function(event, cb) {
        gulp.start('css:build');
    });
    watch([path.watch.js], function(event, cb) {
        gulp.start('js:build');
    });
    /*watch([path.watch.img], function(event, cb) {
        gulp.start('image:build');
    });*/
    watch([path.watch.fonts], function(event, cb) {
        gulp.start('fonts:build');
    });
});

gulp.task('default', ['build', 'webserver', 'watch']);

gulp.task('github-release', function(done) {
    conventionalGithubReleaser({
        type: "oauth",
        token: credentials.github_token
    }, {
        preset: 'angular'
    }, done);
});

gulp.task('patch-version', function () {
    return gulp.src(['./bower.json', './package.json'])
        .pipe(bump({type: 'patch'}).on('error', gutil.log))
        .pipe(gulp.dest('./'));
});

gulp.task('major-version', function () {
    return gulp.src(['./bower.json', './package.json'])
        .pipe(bump({type: 'major'}).on('error', gutil.log))
        .pipe(gulp.dest('./'));
});

gulp.task('minor-version', function () {
    return gulp.src(['./bower.json', './package.json'])
        .pipe(bump({type: 'minor'}).on('error', gutil.log))
        .pipe(gulp.dest('./'));
});

gulp.task('push-changes', function (cb) {
    git.revParse({args:'--abbrev-ref HEAD'}, function (err, branch) {
        git.push('origin', branch, cb);
    });
});

gulp.task('create-new-tag', function (cb) {
    var version = getPackageJsonVersion();
    git.tag(version, 'Created Tag for version: ' + version, function (error) {
        if (error) {
            return cb(error);
        }
        git.revParse({args:'--abbrev-ref HEAD'}, function (err, branch) {
            git.push('origin', branch, {args: '--tags'}, cb);
        });
    });

    function getPackageJsonVersion () {
        return JSON.parse(fs.readFileSync('./package.json', 'utf8')).version;
    }
});

gulp.task('create-commit', function (cb) {
    return gulp.src('package.json')
        .pipe(git.add())
        .pipe(prompt.prompt({
            type: 'input',
            name: 'commit',
            message: 'Please enter commit message...'
        },  function(res){
            return gulp.src([ '!node_modules/', '!bower_components', '!build', '!credentials.json', './*' ], {buffer:false})
                .pipe(git.commit(res.commit));
        }));
});

gulp.task('patch-release', function (callback) {
    runSequence(
        'patch-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
        'github-release',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('PATCH RELEASE FINISHED SUCCESSFULLY');
            }
            callback(error);
        });
});

gulp.task('minor-release', function (callback) {
    runSequence(
        'minor-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
        'github-release',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('MINOR RELEASE FINISHED SUCCESSFULLY');
            }
            callback(error);
        });
});

gulp.task('major-release', function (callback) {
    runSequence(
        'major-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
        'github-release',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('MAJOR RELEASE FINISHED SUCCESSFULLY');
            }
            callback(error);
        });
});