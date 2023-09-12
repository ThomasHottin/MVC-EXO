# Création d'un carnet d'adresse en MVC

## context :

A l'aide de la structure de projet fournie, créez un carnet d'adresse en MVC

## Général :

- Page d'accueil avec un read de tous les noms et prénoms ainsi qu'un bouton qui permet de modifier le contact et un autre pour le supprimer.
- Lorsque l'on clique sur modifier le contact, une nouvelle page se charge avec un read du nom, prénom, tel et email (input text) ainsi qu'un bouton submit pour valider les modifications.
- Lorsque l'on clique sur le bouton modifier -> Requête SQL update
- Un bouton de création d'un nouveau contact doit être présent sur la page d'accueil
- Lorsque l'on clique sur le bouton créer contact, une nouvelle page se charge avec des inputs nom, prénom, tel, email et submitContact
- Lorsque l'on clique sur le bouton submitContact -> Requête SQL Insert Into
- Il faut créer une BDD très simple -> 1 seule table avec id, nom, prénom, tel, email
- Le style doit être minimaliste. Faites quelques choses de jolie et responsive seulement si vous avez terminé (et j'insiste bien sur cette partie !! Le style arrive après !)


## Controller :
- Gère le lancement des actions
- Si un bouton est cliqué (submit), il doit exécuter une méthode qui vient du model, pour ensuite afficher la vue correspondante à l'action avec les données
- Si rien n'est fait, alors l'index est chargé

## Model :
- Gère les données
- Connexion à la BDD
- Permet les requêtes SQL
- Return des données (tableau pour les read, des messages type notification lorsque les actions ont bien été effectuée)

## View :
- Index avec un read de toutes les données en BDD (Nom et prénom) avec 2 boutons (modifier et supprimer) pour chaque ligne
- Un formulaire d'ajout de contact
- Un formulaire de modification de contact
- Message de notification


## Deadline

Mardi 12 août 2023

## Authors

- Thomas Brandt
