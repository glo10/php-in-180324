<?php
// Lancement du script depuis la racine php -S localhost:7000 demo/boucles/index.php
$numbers = [0, 10, 3, 4, 65, 78,45,4, 3, 90];
// for pour 0 (premier élement) au dernier élement (taille du tableau - 1)
// fonction count permet de retourner la taille de l'élément
for($i = 0; $i < count($numbers); $i++) {
  echo 'Avec for indice : '.$i. ', valeur : '.$numbers[$i].'<br>';
}
echo '<br>';
$i = 0;
// While tant que, compteur < indice du dernier élément on boucle qu'on vérifie au début
while($i != count($numbers)) {
  echo 'Avec while indice : '.$i. ', valeur : '.$numbers[$i].'<br>';
  $i++;
}
echo '<br>';
// do While faire...tant que, compteur < indice du dernier élément on boucle qu'on vérifie à la fin
$i = 0;
do {
  echo 'Avec do while indice : '.$i. ', valeur : '.$numbers[$i].'<br>';
  $i++;
} while ($i != count($numbers));

echo '<br>';

// do while avec un opérateur de décrementation
$i = count($numbers) - 1;
do {
  echo 'Avec do while avec opérateur décrementation indice : '.$i. ', valeur : '.$numbers[$i].'<br>';
  $i--;
} while ($i >= 0);
echo '<br>';
echo 'FIN';