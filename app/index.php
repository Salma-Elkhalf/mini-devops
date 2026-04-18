<?php
require_once 'db.php';

if($_POST){
$pdo->prepare("INSERT INTO produit(nom_produit,prix,quantite,id_categorie)
VALUES(?,?,?,?)")->execute([
$_POST['nom'],
$_POST['prix'],
$_POST['quantite'],
$_POST['id_categorie']
]);
header("Location: index.php");
}

$cats=$pdo->query("SELECT * FROM categorie")->fetchAll();
$prods=$pdo->query("SELECT p.*,c.nom_categorie FROM produit p JOIN categorie c ON p.id_categorie=c.id_categorie")->fetchAll();
?>

<link rel="stylesheet" href="style.css">

<h2>Ajouter produit</h2>
<form method="post">
<input name="nom">
<input name="prix">
<input name="quantite">
<select name="id_categorie">
<?php foreach($cats as $c): ?>
<option value="<?=$c['id_categorie']?>"><?=$c['nom_categorie']?></option>
<?php endforeach;?>
</select>
<button>OK</button>
</form>

<h2>Liste</h2>
<table>
<tr><th>ID</th><th>Nom</th><th>Prix</th><th>Qté</th><th>Categorie</th></tr>
<?php foreach($prods as $p): ?>
<tr>
<td><?=$p['id_produit']?></td>
<td><?=$p['nom_produit']?></td>
<td><?=$p['prix']?></td>
<td><?=$p['quantite']?></td>
<td><?=$p['nom_categorie']?></td>
</tr>
<?php endforeach;?>
</table>
