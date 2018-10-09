<?php
namespace Deployer;
require 'recipe/common.php';


// Laravel shared dirs
set('shared_dirs', ['storage']);
// Laravel 5 shared file
set('shared_files', ['.env']);
// Laravel writable dirs
set('writable_dirs', ['bootstrap/cache', 'storage']);
/**
 * Helper tasks
 */
task('artisan:up', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan up; fi');
    writeln('<info>' . $output . '</info>');
})->desc('Disable maintenance mode');
task('artisan:down', function () {
    $output = run('if [ -f {{deploy_path}}/current/artisan ]; then {{bin/php}} {{deploy_path}}/current/artisan down; fi');
    writeln('<error>' . $output . '</error>');
})->desc('Enable maintenance mode');
task('artisan:migrate', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate --force');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan migrate');
task('artisan:migrate:rollback', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:rollback --force');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan migrate:rollback');
task('artisan:migrate:status', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan migrate:status');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan migrate:status');
task('artisan:db:seed', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan db:seed --force');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan db:seed');
task('artisan:cache:clear', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan cache:clear');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan cache:clear');
task('artisan:config:cache', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan config:cache');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan config:cache');
task('artisan:route:cache', function () {
    $output = run('{{bin/php}} {{release_path}}/artisan route:cache');
    writeln('<info>' . $output . '</info>');
})->desc('Execute artisan route:cache');
/**
 * Task deploy:public_disk support the public disk.
 * To run this task automatically, please add below line to your deploy.php file
 * <code>after('deploy:symlink', 'deploy:public_disk');</code>
 * @see https://laravel.com/docs/5.2/filesystem#configuration
 */
task('deploy:public_disk', function () {
    // Remove from source.
    run('if [ -d $(echo {{release_path}}/public/storage) ]; then rm -rf {{release_path}}/public/storage; fi');
    // Create shared dir if it does not exist.
    run('mkdir -p {{deploy_path}}/shared/storage/app/public');
    // Symlink shared dir to release dir
    run('{{bin/symlink}} {{deploy_path}}/shared/storage/app/public {{release_path}}/public/storage');
})->desc('Make symlink for public disk');
/**
 * Main task
 */
task('deploy', [
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:vendors',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'artisan:cache:clear',
    'artisan:config:cache',
])->desc('Deploy your project');
after('deploy', 'success');

// Configuration
set('writable_use_sudo', false);
set('repository', 'git@git.coding.net:zzy932960056/jiangjimedia.git');
add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);
set('keep_releases', 3);
// Servers

server('production', 'www.hyzemedia.com')
    ->user('oipublish')
    ->password('hyze@publish')
//    ->identityFile()
    ->set('deploy_path', '/opt/hyze/jiangji');


// Tasks

