# Prise de notes

## Création d'un projet

```bash
symfony new blog --webapp
```

## Lancement et Arrêt du serveur

```bash
cd blog
symfony serve -d # -d pour lancer en arrière plan 
symfony server:stop
```

## Configuration de la base de données

Dans le fichier  `.env`, on modifie les informations de connerctiosn à la base de données.

## Configuration du serveur mail

Avec mailtrap, un service gratuit de test de mail qui n'a aucun lien aev Symfony.
On a mis en place la ligne de configuration dans un fichier `.env.local` pour ne
pas que les informations de connections à miltrap se retrouvent sur le dépot Github

## Première commande avec symfony-cli

La base c'est :

- être dans le dossier du projet avec son terminal
- utiliser  `symfony console` pourlancer une commande
- l'autre alternative est `php bin/console`

```bash
symfony console make:controller
```

Suite à cela un assistant nous demande le nom du controller (classe),
nous avons choisi `PageController`.

Le résultat a été la création d'un fichier `src/Controller/PageController.php` et un fichier
`templates/page/index.html.twig`

Pour en faire notre pasge d'accueil, nous avons modifié le chemin de la route dans le fichier du controlleur.

```php
// Avant 
#[Route('/pages' , name : 'app_page' )]

// Après
#[Route('/' , name : 'app_page' )]
```

## Les extenions dans VSCode

Pour travailler plud facilement avec Symfony, il est consrillé d'installer les extensions suivantes :

- PHP Intelephense
- Twig Language 2
- Namespace Resolver
