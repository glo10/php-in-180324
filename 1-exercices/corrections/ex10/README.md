# Documentation

## Lancement du serveur web

1. Dezippez le projet dans le dossier `www` de WAMP ou équivalent si vous avez un autre logiciel
2. Le projet doit s'appeler ***app***, dans le cas contraire, s'il est nommé autrement il faut penser à modifier le fichier `front/js/index.js` à la ligne 3.

## Arborescence et rôles des fichiers

1. Dossier *front* dédié aux pages et documents statiques tels que le css, js, les images et les formulaires HTML.
2. Dossier *back* dédié aux pages dynamiques avec traitement des opérations par PHP telles que : 
- Récupération des pays de la page d'inscription par l'intermédiaire du fichier `back/countries.php`
- Récupération des villes de la page d'inscription en fournissant le pays séléctionné par l'intermédiaire du fichier `back/cities.php`. La requête est soumise en [AJAX](https://developer.mozilla.org/fr/docs/Learn/JavaScript/Client-side_web_APIs/Fetching_data) via le script `front/js/index.js` à chaque changement du pays du formulaire d'inscription.
- Traitement de la soumission du formulaire d'inscription par le fichier `back/submit_sign_up.php`
- Traitement de la soumission du formulaire de connexion par le fichier `back/submit_sign_in.php`