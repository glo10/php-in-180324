# Exercice 9 : gestion d'un formulaire d'inscription

---

## Ressources

- [Pages HTML](./ressources/app.zip)
- [Documentation d'aide à la vérification des données sans les expressions régulières](https://www.php.net/manual/fr/function.filter-var.php)
- [Apprendre les expressions régulières](https://regexlearn.com/fr/learn/regex101)
- [Fonction preg_match combinée aux expressions régulières pour vérifier les données](https://www.php.net/manual/fr/function.preg-match)

---

## Enoncé

1. Récupérez les [pages html suivantes](./ressources/app.zip)
2. Récupérez et vérifiez les données soumises par le formulaire d'inscription.
Dans le cas où tout serait renseigné et au bon format, vous pouvez retournez une réponse au format JSON du type `{"message" => "OK"}`.
Dans le cas contaire `{"message" => "KO", "errors" => "error(s) messages"}`