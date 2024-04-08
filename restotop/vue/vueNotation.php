<h1>Notation des restaurants</h1>
<table border="1">
<tr><th>Restaurant</th><th>Ville</th><th>Nombre de critiques</th><th>Note
moyenne</th></tr>
<?php foreach($listeRestos as $unResto){ ?>
 <tr>
 <td><?= $unResto['nomR']?></td>
 <td><?= $unResto['villeR']?></td>
 <td><?= $unResto['critiques']?></td>
 <td><?= $unResto['moyenne']?></td>
</tr>
<?php } ?>
</table>