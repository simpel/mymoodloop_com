<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'mymoodloop.com');

// Project repository
//set('repository', 'https://github.com/simpel/mymoodloop_com.git');
set('repository', 'git@github.com:simpel/mymoodloop_com.git');
//set('branch', 'production');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);
set('cachetool', '/var/run/php/php7.2-fpm.sock');
// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts

//set('default_stage', 'production');

/*
host('mymoodloop.com')
	->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/{{application}}');
*/

host('mymoodloop.com')
	->user('deployer')
	->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/production/{{application}}')
    ->set('branch', 'production')
    ->stage('production');

// Staging Server
host('stage.mymoodloop.com')
	->user('deployer')
	->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/stage/{{application}}')
    ->set('branch', 'master')
    ->stage('stage');
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
after('deploy:symlink', 'cachetool:clear:opcache');
// or
after('deploy:symlink', 'cachetool:clear:apc');
