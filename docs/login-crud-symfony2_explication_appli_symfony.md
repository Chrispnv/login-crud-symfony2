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
[Symfony2 bundles](http://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_bundle.html) / 
[Symfony2 cookbook bundles](http://symfony.com/fr/doc/current/cookbook/bundles/best_practices.html) / 
[Ferme du web bundles](http://www.lafermeduweb.net/tutorial/symfony2-les-bundles-et-la-structure-des-fichiers-p91.html)

Le module est lui-même attaché à une entité supérieure (vendor) qui peut contenir plusieurs modules.  
Cela donne : `application > vendor > bundle`  
Attention de bien respecter les règles de nommage et la casse lors de la création.  
C'est à ce moment que le choix de la représentation de la configuration se fait : yml, xml ou annotation.  
Ici, j'ai fait le choix des annotations.  
La commande suivante lance la génération du module avec intéraction afin de saisir les paramètres du module.

```
$ php app/console generate:bundle
```

Dans la structure Symfony de l'application, 2 répertoires vont être créés. Le répertoire du module contient une structure Symfony pour la suite du développement de l'application.  
`/home/usercourant/applisymf/src/Nomvendor/NommoduleBundle` (ex : src/Pnv/SaisieBundle)

- Créer le mapping (sorte de métadonnées) entre les futures entités (tables bdd sous forme de classe) et les tables de la bdd.  
Le chemin Nomvendor/NommoduleBundle est raccourci en `VendorNommoduleBundle`.  
`annotation` spécifie que ces métadonnées seront dans les commentaires en en-tête des classes et des méthodes des entités qui vont être créées.

```
$ php app/console doctrine:mapping:import --force VendorNommoduleBundle annotation
```

- créer les entités (tables bdd sous forme de classe) du module  
Une seule entité peut être créer ([Symfony2 Entity](http://symfony.com/fr/doc/current/bundles/SensioGeneratorBundle/commands/generate_doctrine_entity.html)) ou toutes celles correspondant au modèle de données.  
La commande suivante génèrent toutes les entités du modèle de données.

```
$ php app/console doctrine:generate:entities PnvSaisieBundle
```

Voilà l'application Symfony est prête pour le développement des fonctionnalités attendues.  
Si votre application contient des formulaires : 
- des commandes Symfony permettent de générer un workflow CRUD (Ajout/Modification/suppression/affichage) : [Symfony2 CRUD](http://symfony.com/fr/doc/current/bundles/SensioGeneratorBundle/commands/generate_doctrine_crud.html)
- Sinon je trouve que de les construire manuellement est plus formateur : [La ferme du web - Formulaire](http://www.lafermeduweb.net/tutorial/les-formulaires-dans-symfony2-p100.html)

### PETITE DESCRIPTION DE LA STRUCTURE SYMFONY

Le modèle VMC du framework Symfony2 se comprend bien à la compréhension des répertoires et des classes de la structure d'une application.

- `/home/usercourant/applisymf/app` = contient principalement de la config et des classes de haut niveau.
- `/home/usercourant/applisymf/web` = sert de racine web du projet. Contient tout le javascript.
- `/home/usercourant/applisymf/src` = contient les vendor et les modules.
- `/home/usercourant/applisymf/src/Vendor/NommoduleBundle` = contient toutes les fonctionnalité déclinées coté serveur et coté client. Les modules sont structurés sur le modèle VMC comme suit :
    - `Controller` = fait le lien entre la bdd et le coté client (view).
    - `Entity`, `Manager`, `Repository` = modélisation en entités (classes php) des tables de la bdd, méthodes d'accès à la bdd. tout cela permet de factoriser, de hiérarchiser les fonctions.
    - `Resources/view` = coté client avec les vues, les templates, la liaison avec le javascript...
    - `Form` = gestion des formulaires dans l'application.
