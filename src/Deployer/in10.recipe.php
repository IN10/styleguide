<?php

namespace Deployer;

/*
 * Deployer.org recipe for the IN10-specific build stack.
 * We use a local build system: create an instance of the
 * current project, build locally, and rsync all files to the server.
 */

// Based off the common laravel recipe
require_once 'recipe/laravel.php';

// Main, full process: make build -> release -> clean -> ??? -> profit!
desc('Deploy your project');
task('deploy', [
    'build',
    'release',
    'cleanup',
    'success'
]);

task('build', [
    'build:create-folder',
    'build:clone',
    'build:prepare-env',
    'build:backend',
    'build:frontend',
    'build:clean',
    'build:version',
]);

task('build:create-folder', function () {
    // Ensure the build directory exists, and is empty
    run('rm -rf ./build');
    run('mkdir ./build');
})->local();

task('build:clone', function () {
    within('build', function () {
        run('git clone .. .');
    });
})->local();

task('build:prepare-env', function () {
    within('build', function () {
        run('cp ../.env ./.env');
    });
})->local();

task('build:backend', function () {
    within('build', function () {
        run('composer install --no-interaction --prefer-dist --optimize-autoloader');
    });
})->local();

task('build:frontend', function () {
    within('build', function () {
        run('yarn build');
    });
})->local();

task('build:clean', function () {
    within('build', function () {
        run('rm -rf node_modules');
        run('rm -rf .git');
        run('rm -rf .env');
        run('rm -rf resources/assets/*');
        run('rm -rf tests/*');
    });
})->local();

task('build:version', function () {
    within('build', function () {
        $sha = run('git rev-parse HEAD');
        $username = run('whoami');
        $date = run('date +"%Y-%m-%d @ %H:%M:%S"');
        run("echo '$sha - $date - $username' >> .version");
    });
})->local();

// Make a release
task('release', [
    'deploy:info',
    'deploy:lock',
    'deploy:release',
    'upload',
    'deploy:shared',
    'deploy:writable',
    'artisan:storage:link',
    'artisan:view:clear',
    'artisan:cache:clear',
    'artisan:config:cache',
    'artisan:optimize',
    'artisan:migrate',
    'deploy:symlink',
    'deploy:unlock',
]);

// Upload files to server
task('upload', function () {
    upload('build/', '{{release_path}}');
});

// Auto-unlock when the deployment fails
after('deploy:failed', 'deploy:unlock');

// Clear opcache after deploying (only on test)
task('clear-opcache', function () {
    run('echo "" | sudo -S service php7.1-fpm reload');
})->onHosts(['test']);
after('success', 'clear-opcache');
