# Lancement PHP

## 3 façons d'exécuter vos projets PHP

#### Depuis le CLI (Command Line Interface) de PHP

Depuis un terminal (console), à la racine de votre projet, pour interpréter votre code PHP avec une sortie sur le terminal, exécutez à la commande suivante : `php index.php`.
`index.php` est le nom du fichier (si votre fichier s'appelle autrement, il suffit de le mentionner à la place). Attention à bien tenir compte du chemin du dossier qui exécute cette commande et à bien respecter votre arborescence des fichiers avant d'arriver au fichier final.

Depuis un terminal, à la racine de votre projet, pour interpréter votre code PHP par un navigateur, exécutez à la commande suivante : `php -S http://localhost:8080 src/index.php`.

Même réflexion que précédemment sur les chemins avant l'exécution de cette commande.

PS : vous pouvez renseigner le port que vous voulez sauf les ports déjà réservés par d'autres applications.

---

### Depuis le dossier www de WAMP ou l'équivalent pour les autres environnements MAMP et LAMP

Créez un dossier à partir du dossier ***www*** de *Wamp*
Accéder à l’url `http://localhost/nomDuDossier`

La procédure est similaire avec les autres environnements de développement *MAMP*, *XAMP*, etc.

`index.php` est le point d’entrée d’un programme PHP. Les serveurs web sont configurés pour lire dans un dossier ce fichier en premier.

---

### Depuis un virtual Host

- [Tutoriel mise en place virtual host en modifiant directement les fichiers](https://adventy.org/fr/tutoriel/comment-creer-et-configurer-un-hote-virtuel-sur-apache)
- [Tutoriel depuis l'interface graphique](https://www.youtube.com/watch?app=desktop&v=GQHmzCoqEHw)
Créez un dossier n’importe où sur votre machine
Créez un *virtualHost* qui permet de faire une correspondre entre un nom de domaine en local avec le chemin absolu vers ce dossier
Accédez au nom de domaine depuis le navigateur pour accéder au programme