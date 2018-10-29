# DevTest
Petits test d'évaluation pour savoir si tu gères.

![Yeah!](https://media.giphy.com/media/8g63zqQ5RPt60/giphy.gif)

**Exercice 1 (HTML, PHP, JS)**

Contexte :
> Vous avez 3 utilisateurs enregistrés en base de données, vous devez les récupérer et afficher leurs informations dans un tableau.

__Partie 1 :__
- Dossier `/Exo_0`
- Créer un script PHP qui récupère les données de `./data/users.json` et remplit l'entitée User qui se trouve dans `/src/User.php`
- [ Facultatif ] Créer un "remplisseur" d'entitée
- Créer un tableau HTML sur `./index.php` et afficher les utilisateurs récupérés.

__Partie 2 :__ 
- Utiliser la page `./ajax.html`
- Remplir le tableau en AJAX
- [ Facultatif ] Remplir ce tableau avec la fonction native de DataTable

***

**Exercice 2 (HTML, PHP)**

Contexte : 
> Vous vous apprêtez à envoyer un message à un de vos prospects. Dans ce messages, vous avez inséré des pseudo-variables qui doivent être remplacées par les informations dudit prospect. Voici les pseudo-variables disponibles :


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

__Partie 1 :__
- Dossier `./Exo_1`
- Récupérer les données de `./data/user.json` ainsi que `./data/message.html`
- Créer un script qui remplace les pseudo-variables dans le message par les vraies données.

__[ Facultatif ] Partie 2 :__
- Créer un script qui remplace les pseudo-variables dans le message 2.

| Fonctions         | Définition                                    |
| :------------     | :---                                          |
| [first_letter]    |   Première lettre de la chaine de caractère   |
| [shorted_url]     |   URL raccourcie (Ne récupère que le protocole et le nom de domaine. Ex: https://sg-autorepondeur.com)|
| [format]          |   Formate une date                            |
| [if] ... [endif]  |   Condition IF                                |

***

**Exercice 3**

Contexte : 
> Vous souhaitez récupérer des informations sur les visiteurs de votre site web. Vous voulez récupérer prénom, nom et adresse email. Pour cela, vous allez avoir besoin d'un formulaire HTML qui enverra les données vers une page d'inscription.

__Partie 1 :__
- Dossier `./Exo_2`
- Utiliser la page `./formulaire.html` pour construire le formulaire.
- Utiliser la page `./data.php` pour récupérer les informations.
- Enregistrer les informations dans un fichier (méthode au choix)

__Partie 2 :__
- Rediriger les inscrits vers une page à l'inscription. Vers une page A s'ils sont nouveaux, ou une page B s'ils sont déjà inscrits.

__[ Facultatif ] Partie 3 :__
- Reprendre la partie 1 mais effectuer un enregistrement des données en asynchrone. Votre visiteur ne doit pas voir son navigateur rafraichir sa page.

***

