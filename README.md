
INSTALLATION

1/
Installer un serveur local xampp ou WampServer 
la version du php doit être php 8


2/
Installer composer sur votre machine 

utiliser ce lien pour télécharger compser 
https://getcomposer.org/


3/ 
le chemin de la base de donnée est le suivant
testaid\resources\views\MCD\aid.sql

Recupérer la base de donnée puis l'importer dans votre serveur local


4/
Clonez le Repo sur GitHub 
Accédez au répertoire du projet puis
installer les dépendances de l’application web à partir de composer en 
exécuter cette commande :
composer install

5/
Générez votre clé d’encryption en executan cette commande
php artisan key:generate 

6/
Enfin exécuter cette commande voir le projet
php artisan serve
 
 vous verez quelque chose comme ça 
 
 H:\Coding\Test\monartisan\aid\example-boilerplate>php artisan serve
 Starting Laravel development server: http://127.0.0.1:8000
 [Wed Jun  7 17:15:20 2023] PHP 8.0.6 Development Server (http://127.0.0.1:8000) started
 
 cliquez sur le lien http://127.0.0.1:8000 pour voir le projet
 





