INSTALLATION DE LA BDD
----------------------------
- Créer une BDD dans votre environnement de BDD. Si le propriétaire est autre que postgres, l'utiliser dans la config de l'appli par la suite (app/config/parameters.yml).
- Récupérer et exécuter le code SQL dans le fichier /sql/create_tables.sql qui est sur le dépôt.

**IMPORTANT : les tables doivent se trouver dans le schéma public de la bdd (je n'ai pas trouvé comment utilisé un autre schéma).**

INSTALLATION DE L'APPLICATION
------------------------------------------
- Info : 
    - Cette doc est valable pour une installation et une configuration sur Linux (Ubuntu).
    - Les commandes Linux suivantes demandent pour certaines d'être lancées avec sudo. Il faut au préalable que le user linux qui lance les commandes ait les droits ```sudo```

        ```
        $ su -
        $ adduser usercourant sudo
        $ exit
        ```
    
- Récupérer avec Git ou d'une autre façon le dépôt de l'application dans un répertoire prélablement créé (mkdir ...).  Pour mon cas, ce répertoire contenant l'appli se trouve dans le répertoire du user linux courant `(/home/repuser)`.

- Changer le propriétaire de ce nouveau répertoire. Mettre le user web comme nouveau propriétaire.
  - Pour trouver le user web.

    ```
    $ ps aux | grep httpd ou ps aux | grep apache
    ```
    
```
$ chown -R userweb:userweb repappli
```

- Rendre lisible l'appli sur internet : 2 solutions.
    - Soit créer un lien symbolique vers le répertoire web de l'appli à la racine web d'Apache.
    
        ```
        $ ln -s /cheminrepappli/repappli/web /cheminracineweb/nomliensymbo
        ``` 

    - Soit ajouter le virtualHost de l'appli dans la conf Apache.
    
        ```
        <VirtualHost *:80>
            ServerName nomappli.com
            DocumentRoot /cheminrepappli/repappli/web
            <Directory "/cheminrepappli/repappli/web">
                DirectoryIndex app.php
                Options -Indexes FollowSymLinks SymLinksifOwnerMatch
                AllowOverride All
                Allow from All
            </Directory>
        </VirtualHost>
        ```

- Changer les droits sur `cache` et `logs` de l'appli depuis `/home/repuser/repappli`

```
$ chmod -R 777 app/cache app/logs
```

- Configurer la BDD dans l'appli. Editer le fichier `/home/repuser/repappli/app/config/parameters.yml` et modifier les paramètres.

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

- Tester l'adresse `http://ipserveurweb/nomappli/app_dev.php/activite`, vous devez voir un champ Login, un champ Mot de passe et un bouton Login.  
Attention : pour des questions de sécurité, regarder [ceci](https://github.com/Chrispnv/login-crud-symfony2/blob/master/docs/login-crud-symfony2_explication_creation_appli_symfony.md#ancre1) pour l'accès en DEV de l'appli, car dans l'appli, le bloc pour la gestion des accès IP en DEV a été commenté dans /web/app_dev.php

    ```
    Login = admin
    Mot de passe = admin
    ```

    Le logout n'a pas été mis en place.
    
Pour comprendre ce que font les fonctions et le code, j'ai ajouté des commentaires dans différents fichiers de l'application (php, yml, twig).

Pour comprendre comment l'application fonctionne suivre la doc [login-crud-symfony2_explication_appli.md](https://github.com/Chrispnv/login-crud-symfony2/blob/master/docs/login-crud-symfony2_explication_creation_appli_symfony.md)

Voilà. Bon test.

