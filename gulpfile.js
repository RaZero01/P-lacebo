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
    bump = require('gulp-bump'),
    gutil = require('gulp-util'),
    git = require('gulp-git'),
    credentials = require('./credentials.json'),
    sftp = require('gulp-sftp'),
    size = require('gulp-size'),
    changed = require('gulp-changed'),
    connect = require('gulp-connect-php'),
    fs = require('fs');

require('gulp-task-list')(gulp, ['html:build', 'css:build', 'libs:build', 'php:build', 'templates:build', 'image:build',
    'fonts:build', 'js:build', 'github-release', 'watch', 'webserver', 'patch-version', 'minor-version',
    'major-version', 'push-changes', 'create-new-tag', 'create-commit']);

var path = {
    build: {
        html: 'build/',
        js: 'build/js/',
        css: 'build/css/',
        img: 'build/img/',
        fonts: 'build/fonts/',
        php: 'build/',
        libs: 'build/vendor/',
        templates: 'build/template/'
    },
    src: {
        html: 'src/*.html',
        js: 'src/js/**/*.js',
        css: 'src/css/**/*.css',
        img: 'src/img/**/*.{gif,jpg,png,svg}',
        fonts: 'src/fonts/**/*.*',
        php: 'src/*.php',
        libs: 'vendor/**/*',
        templates: 'src/template/*.twig'
    },
    watch: {
        html: 'src/**/*.html',
        js: 'src/js/**/*.js',
        css: 'src/css/**/*.css',
        img: 'src/img/**/*.*',
        fonts: 'src/fonts/**/*.*',
        php: 'src/**/*.php',
        templates: 'src/template/*.twig'
    },
    clean: './build'
};

var config = {
    proxy: '127.0.0.1:9000',
    logPrefix: 'P-lacebo'
};

gulp.task('webserver', function () {
    return connect.server({hostname: '127.0.0.1', port: '9000', base: './build'}, function () {
        browserSync(config);
    })
});

gulp.task('clean', function (cb) {
    return rimraf(path.clean, cb);
});

gulp.task('html:build', function () {
    return gulp.src(path.src.html)
        .pipe(rigger())
        .pipe(gulp.dest(path.build.html))
        .pipe(reload({stream: true}));
});

gulp.task('js:build', function () {
    return gulp.src(mainBowerFiles( { filter: "**/*.js",
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
    return gulp.src(mainBowerFiles( { filter: "**/*.css",
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
    return gulp.src(path.src.img)
        .pipe(changed(path.build.img))
        .pipe(imagemin())
        .pipe(gulp.dest(path.build.img))
        .pipe(size({title: 'img'}))
        .pipe(reload({stream: true}));
});

gulp.task('fonts:build', function() {
    return gulp.src(path.src.fonts)
        .pipe(changed(path.build.fonts))
        .pipe(gulp.dest(path.build.fonts))
});

gulp.task('php:build', function () {
    return gulp.src(path.src.php)
        .pipe(changed(path.build.php))
        .pipe(gulp.dest(path.build.php))
        .pipe(reload({stream: true}))
});

gulp.task('templates:build', function () {
    return gulp.src(path.src.templates)
        .pipe(changed(path.build.templates))
        .pipe(gulp.dest(path.build.templates))
        .pipe(reload({stream: true}))
});

gulp.task('libs:build', function () {
    return gulp.src(path.src.libs)
        .pipe(changed(path.build.libs))
        .pipe(gulp.dest(path.build.libs))
});

gulp.task('build', function (cb) {
    return runSequence(
        'html:build',
        'js:build',
        'css:build',
        'php:build',
        'templates:build',
        'libs:build',
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
    watch([path.watch.php], function (event, cb) {
        gulp.start('php:build');
    });
    watch([path.watch.templates], function (event, cb) {
        gulp.start('templates:build');
    })
});

gulp.task('default', function (cb) {
    return runSequence(
        'build',
        'webserver',
        'watch',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('Gulp test environment run successfully');
            }
            cb(error);
        }
    )
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
    return git.revParse({args:'--abbrev-ref HEAD'}, function (err, branch) {
        git.push('origin', branch, cb);
    });
});

gulp.task('create-new-tag', function (cb) {
    var version = getPackageJsonVersion();
    return git.tag(version, 'Created Tag for version: ' + version, function (error) {
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
    return runSequence(
        'patch-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
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
    return runSequence(
        'minor-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
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
    return runSequence(
        'major-version',
        'create-commit',
        'push-changes',
        'create-new-tag',
        function (error) {
            if (error) {
                console.log(error.message);
            } else {
                console.log('MAJOR RELEASE FINISHED SUCCESSFULLY');
            }
            callback(error);
        });
});

gulp.task('deploy', function (cb) {
    return gulp.src('build/**/*')
        .pipe(sftp({
            host: credentials.host,
            user: credentials.ftp_user,
            pass: credentials.ftp_password,
            remotePath: credentials.remote_path
        }))
});