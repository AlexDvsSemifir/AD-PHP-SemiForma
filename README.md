# SemiForma

Application simple qui a pour but de gérer les formations.

## Features

- Gestion des candidats
- Gestion des formations
- Gestion des formateurs
- Gestion des salles dans lesquelles se déroulent les formations
- Gestion des sessions auxquelles les candidats participent (sujet de formation exemple: "Angular", "Symfony", "Agile et Scrum", etc.)
- Gestion des organismes de formations qui vendent leurs formations
- Gestion des promotions (groupes de candidats) avec leur(s) formateur(s) référent(s)

## Démarrer le projet

- Dans `./bdd` : `docker-compose up -d`
- A la racine :
  - `npm i` : pour installer les dépendances
  - `npm run --watch` : pour lancer le serveur
  - `symfony serve` : pour lancer le serveur