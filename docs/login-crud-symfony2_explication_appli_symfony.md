### INTRODUCTION

Selon les besoins, il existe plusieurs façon de créer une application, notamment si la bdd est existante ou pas. Donc, cette doc décrit seulement la manière dont a até créée cette application.

L'application a été créée depuis une bdd existante et les *annotations* ont été utilisées pour le workflow entre les pages et pour la relation avec la bdd. Ces fonctionnalités sont soient gérées avec des fichiers yml ou xml ou avec des annotations (balises @) qui sont directement dans des tags commentaires en en-tête de classe ou de méthodes.

**IMPORTANT : les tables utilisées dans l'application Symfony doivent se trouver dans le schéma public de la bdd (je n'ai pas trouvé comment utilisé un autre schéma).**

### CREATION DE L'APPLICATION

- Info : 
    - Cette doc est valable pour une installation et une configuration sur Linux (Ubuntu).
    - Les commandes Linux suivantes demandent pour certaines d'être lancées avec sudo. Il faut au préalable que le user linux qui lance les commandes ait les droits ```sudo```

        ```
        $ su -
        $ adduser usercourant sudo
        $ exit
        ```

- Installer et configurer Symfony2

Suivre la doc d'installation suivante : [Installation Symfony2](http://symfony.com/fr/doc/current/book/installation.html "Titre")

- Créer un nouveau projet (= application Symfony. Ex : dans `/home/usercourant`). Un répertoire `applisymf` va être créé contenant toute la structure Symfony pour l'application.

    ```
    $ symfony new applisymf
    ```
    
- Rendre lisible l'appli sur internet : 2 solutions.
    - Soit créer un lien symbolique vers le répertoire web de l'appli à la racine web d'Apache.
    
        ```
        $ ln -s /home/usercourant/applisymf/web /cheminracineweb/nomappli
        ``` 

    - Soit ajouter le virtualHost de l'appli dans la conf Apache.
    
        ```
        <VirtualHost *:80>
            ServerName nomappli.com
            DocumentRoot /cheminrepappli/applisymf/web
            <Directory "/cheminrepappli/applisymf/web">
                DirectoryIndex app.php
                Options -Indexes FollowSymLinks SymLinksifOwnerMatch
                AllowOverride All
                Allow from All
            </Directory>
        </VirtualHost>
        ```

- Tester l'accès à l'application dans un navigateur. Il y a une notion de PROD et de DEV (debug) dans Symfony.

Pour une question de sécurité, l'application en DEV est testable comme suit :

`http://127.0.0.1/nomappli/app_dev.php`

`app_dev.php` permet d'afficher dans le navigateur toutes les fonctionnalités de débugage de Symfony.

`app_dev.php` ne peut pas être tester par défaut en dehors de 127.0.0.1. Pour y accéder en dehors de 127.0.0.1, il faut commenter les lignes suivantes ou changer 127.0.0.1 par une autre IP dans le fichier `web/app_dev.php`

```
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !(in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1')) || php_sapi_name() === 'cli-server')
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
```

Le premier accès à l'application crée des des fichiers de log et dans le cache sur lesquels les droits d'accès doivent être changer. L'interface d'accueil demande d'ailleurs cela. Donc pour ce depuis depuis `/home/usercourant/applisymf` :

```
$ chmod -R 777 app/cache app/logs
```

Relancer dans le navigateur. Tout devrait être bon.

`http://127.0.0.1/nomappli/app.php` ou `http://autreip/nomappli/app.php` renvoie sur une page en PROD fonctionnelle mais vide (sans fonctionnalités de bebugage).

- Configurer la BDD dans l'appli. Editer le fichier `/home/usercourant/applisymf/app/config/parameters.yml` et modifier les paramètres.

```
parameters:
    database_driver: pdo_pgsql (pour d'autres systèmes voir doc Symfony)
    database_host: IP serveur BDD
    database_port: port (par défaut 5432)
    database_name: nombdd
    database_user: userbdd
    database_password: pwdbdd
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    locale: en
    secret: 5a1c9e6070c7a76af25a9e6ec63a1fbea74b7382
```

- Tester l'adresse `http://ipserveurweb/nomappli/app_dev.php/config.php`. Le message suivante doit apparaitre : Your configuration looks good to run Symfony.

- Créer un module (bundle) dans l'application. Une application Symfony est constituée de modules qui sont des fonctionnalités importantes dans l'application (ex : module authentification + module avec un formulaire). Ils peuvent être indépendants et factorisables pour d'autres applications.

Voir les tutoriels suivants :   
[Symfony2 bundles](http://symfony.com/doc/bundles/) / 
[Symfony2 cookbook bundles](http://symfony.com/fr/doc/current/cookbook/bundles/best_practices.html) / 
[Ferme du web bundles](http://www.lafermeduweb.net/tutorial/symfony2-les-bundles-et-la-structure-des-fichiers-p91.html)

Le module est lui-même attaché à une entité supérieure (vendor) qui peut contenir plusieurs modules.  
Cela donne : `application > vendor > bundle`  
Attention de bien respecter les règles de nommage et la casse lors de la création.  
C'est à ce moment que le choix de la représentation de la configuration se fait : yml, xml ou annotation.  
Ici, j'ai fait le choix des annotations.

```
$ php app/console generate:bundle
```
