INSTALLATION
------------

Info : 
* Cette doc est valable pour une installation et une configuration sur Linux (Ubuntu).
* Les commandes Linux suivantes demandent pour certaines d'être lancées avec sudo. Il faut au préalable que le user linux qui lance les commandes ait les droits ```sudo```

```su -<br/>
   adduser usercourant sudo<br/>
  exit```

- Récupérer avec Git ou d'une autre façon le dépôt de l'application dans un répertoire prélablement créé (mkdir ...).  Pour mon cas, ce répertoire contenant l'appli se trouve dans le répertoire du user linux courant (/home/[rep user]).

- Changer le propriétaire de ce nouveau répertoire. Mettre le user web comme nouveau propriétaire
  - Pour trouver le user web

  ```$ ps aux | grep httpd ou ps aux | grep apache```
