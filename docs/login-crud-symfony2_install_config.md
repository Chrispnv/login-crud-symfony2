INSTALLATION
------------

Info : 
* Cette doc est valable pour une installation et une configuration sur Linux (Ubuntu).
* Les commandes Linux suivantes demandent pour certaines d'être lancées avec sudo. Il faut au préalable que le user linux qui lance les commandes ait les droits ```sudo```

    ```
    $ su -
    $ adduser usercourant sudo
    $ exit
    ```
    
- Récupérer avec Git ou d'une autre façon le dépôt de l'application dans un répertoire prélablement créé (mkdir ...).  Pour mon cas, ce répertoire contenant l'appli se trouve dans le répertoire du user linux courant (/home/[rep user]).

- Changer le propriétaire de ce nouveau répertoire. Mettre le user web comme nouveau propriétaire
  - Pour trouver le user web

        ```$ ps aux | grep httpd ou ps aux | grep apache```
    
```$ chown -R userweb:userweb repappli```

- Rendre lisible l'appli sur internet : 2 solutions
    - Soit créer un lien symbolique vers le répertoire web de l'appli à la racine web d'Apache
    
       ```$ ln -s /cheminrepappli/repappli/web /cheminracineweb/nomliensymbo``` 

    - Soit ajouter le virtualHost de l'appli dans la conf Apache
    
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

- Changer droits sur `cache` et `logs` de l'appli
