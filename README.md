# P-lacebo
### Site webpage [p-lacebo.com](http://www.p-lacebo.com)

## Authors
- IT-Director, Front-end Developer - Konstantin Razinkov <korazinkov@gmail.com>
- Teamlead, Fullstack Developer - Ivan Sokolovskii <ivan3177@gmail.com>
- Front-end Developer - Dmitriy Matushin <lirveez@gmail.com>

### Feedback
For all questions feel free to contact teamlead: \
**Ivan Sokolovskii \
<ivan3177@gmail.com> \
Telegram: @ivan3177** \
Or project IT-director: \
**Konstantin Razinkov \
<korazinkov@gmail.com> \
Telegram: @RaZero01** 


# Project HOWTO

## Init
* Clone repository
* Run npm install to install required plugins
* Run bower install to install dependencies
* Run composer install to install required php libraries
* Install bower, gulp and composer(requires php) globally \
npm install -g gulp \
npm install -g bower 
npm install -g composer


## Project structure
- src - all source files goes here
- gulp.js - gulp tasks for automated build and release
- package.json - dependencies for gulp plugins
- bower.json - project dependecies
- build(gitignored) - build result
- bower_components(gitignored) - installed project dependencies
- node_modules(gitignored) - installed plugins for gulp
- vendor(gitignored) - libs for php

## Workflow
- To **run** project in console run _gulp_ in console. Result will be 
placed in _build_ directory and local web server will be started. \
Browser will be opened with local server url. \
All files are being **watched** so all changed in _src_ will be 
automatically put to _build_ and browser will be reloaded.
- To just **build** project run _gulp build_
- To **clean** run _gulp clean_
- _gulp task-list_ to list all available tasks.

When all changes are ready to be released on Github use gulp tasks 
to make release.
* _gulp patch-release_ - for small releases like bugfix
* _gulp minor-release_ - for minor releases like new functionality
* _gulp major-release_ - for major releases \
Gulp will prompt for commit message, automatically increment versions
in package.json and bower.json, create tag for commit and push all to
Github.
