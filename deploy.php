<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'mymoodloop.com');

// Project repository
//set('repository', 'https://github.com/simpel/mymoodloop_com.git');
set('repository', 'git@github.com:simpel/mymoodloop_com.git');
set('branch', 'production');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', [
	'current/bootstrap/cache',
   	'current/storage'
]);


// Hosts

host('mymoodloop.com')
	->user('deployer')
    ->identityFile('~/.ssh/deployerkey')
    ->set('deploy_path', '/var/www/html/{{application}}');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');
