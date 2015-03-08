
# formation AngularJS app starter

## Environnement de base:

* Git / msysGit
* WAMP / MAMP
* NodeJS
  * GruntJS
  * Bower: 'npm install -g bower'
* Ruby
  * SASS

## Initialisation:

* 'git clone https://github.com/bertrandg/formation-angular-app-starter.git'
* 'cd formation-angular-app-starter'
* 'php composer.phar update'
* 'php app/console doctrine:database:create'
* 'php app/console dotrine:migration:diff'
* 'php app/console doctrine:migration:migrate'
* importer 'dump_bdd.sql' dans la base

Vous avez une application Symfony2 initiale avec les entités 'user' (id: angular, pwd: angular) et 'post' (plusieurs déjà en base).

* 'cd src/Sapiens/Bundle/AngularSpaBundle/'
* 'bower update'
* 'bower install angular-bootstrap --save'
* 'bower install nprogress --save'
* 'bower install ui-router --save'




