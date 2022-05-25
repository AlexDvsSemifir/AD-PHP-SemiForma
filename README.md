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

## Diagramme

Révision du diagramme sur ce [lien](https://www.planttext.com/?text=TLBBQiCm4BphAnOV2mxDrQUKqa1F3UG3Ycflob9fPQJrfQN_Nbcf7iJa96bdc9aTT0YYlIpMgF15F6klBOn6X_0aukbZ4NmT7P_f6-5HgOJ0MHk3yAC0sDa1WdZrMp0CWHmdTDA2xnD6aI7Ty-X2N0PRXQFpDcAB1xApGOii0KxeWsDUNGlnMVD4KUO-ZrZGN_I8xRpn19WzDY-hoUIxeBa9TlBEEidBtGkUyUXDiXYy8RtvJyqKx2Q9ddoi3ZVsRQgeSks-U-YWxrqw_njNkVbrvle-dQNBYkvtkqpOTtKdfMhlAv3KMy80Bpok8LNf_PfYIpng4eXVIGXLBQrhR4jLglRHkbPS7P2d-3t_0000) !

## Démarrer le projet

- Dans `./bdd` : `docker-compose up -d`
- A la racine :
  - `npm i` : pour installer les dépendances
  - `npm run --watch` : pour lancer le serveur
  - `symfony serve` : pour lancer le serveur