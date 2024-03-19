# Exercice 9 : gestion d'un formulaire d'inscription

---

## Ressources

- [Pages HTML/CSS/JS/PHP à récupérer ici](./ressources/app.zip)
- [Documentation d'aide à la vérification des données sans les expressions régulières](https://www.php.net/manual/fr/function.filter-var.php)
- [Apprendre les expressions régulières](https://regexlearn.com/fr/learn/regex101)
- [Fonction preg_match combinée aux expressions régulières pour vérifier les données](https://www.php.net/manual/fr/function.preg-match)

---

## Enoncé

1. Récupérez ce [fichier zip](./ressources/app.zip)
2. Lisez le `README.md` une fois que vous avez décompressé le fichier.
3. Récupérez les pays
4. Récupérez les villes
3. Récupérez et vérifiez les données soumises par le formulaire d'inscription.
Dans le cas où tout serait renseigné et au bon format, vous pouvez retournez une réponse au format JSON du type `{"message" => "OK"}`.
Dans le cas contaire `{"message" => "KO", "errors" => "error(s) messages"}`