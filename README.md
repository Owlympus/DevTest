# DevTest
Petits test d'évaluation pour savoir si tu gères.

![Yeah!](https://media.giphy.com/media/8g63zqQ5RPt60/giphy.gif)

**Exercice 1 (HTML, PHP, JS)**

Contexte :
> Vous avez 3 utilisateurs enregistrés en base de données, vous devez les récupérer et afficher leurs informations dans un tableau.

__Partie 1 :__
- Dossier `./Exo_0`
- Récupérer les données de `./data/users.json` et remplir l'entitée User qui se trouve dans `./src/User.php`
- [ Facultatif ] Créer un "remplisseur" d'entitée
- Créer un tableau HTML sur `index.php` et afficher les utilisateurs récupérés.

__Partie 2 :__ 
- Utiliser la page `ajax.html`
- Remplir le tableau en AJAX

**Exercice 2 (HTML, PHP)**

Contexte : 
> Vous vous apprêtez à envoyer un message à un de vos prospects. Dans ce messages, vous avez inséré des pseudo-variables qui doivent être remplacées par les informations dudit prospect. Voici les pseudo-variables disponibles :

__Partie 1 :__
- Dossier `./Exo_1`
- Récupérer les données de `./data/user.json` ainsi que `./data/message.html`
- Remplacer les pseudo-variables dans le message par les vraies données.

| Pseudo-variable   | Définition                                |
| :------------     | :---                                      |
| [id]              |   Identifiant                             |
| [first_name]      |   Prénom                                  |
| [last_name]       |   Nom                                     |
| [username]        |   Nom d'utilisateur                       |
| [email]           |   Adresse email                           |
| [birth_date]      |   Date d'anniversaire                     |
| [subscription]    |   Date d'inscription                      |
| [field_x]         |   Champ supplémentaire (x est un entier)  |

__[ Facultatif ] Partie 2 :__
- Remplacer les pseudo-variables dans le message 2.

| Fonctions         | Définition                                    |
| :------------     | :---                                          |
| [first_letter]    |   Première lettre de la chaine de caractère   |
| [shorted_url]     |   URL raccourcie (Ne récupère que le protocole et le nom de domaine. Ex: https://sg-autorepondeur.com)|
| [format]          |   Formate une date                            |
| [if] ... [endif]  |   Condition IF                                |

**Exercice 3**

Contexte : 
> Vous souhaitez récupérer des prospects qui visitent votre site web. Vous voulez récupérer prénom, nom et adresse email. Pour cela, vous allez avoir besoin d'un formulaire HTML qui enverra les données vers une page d'inscription.

__Partie 1 :__
- Dossier `./Exo_2`
- Utiliser la page `./formulaire.html` pour construire le formulaire.
- Utiliser la page `./data.php` pour récupérer les informations.