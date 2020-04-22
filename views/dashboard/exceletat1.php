<?php
echo ' <table border="1">
<thead>
<tr>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
</tr></thead>
<tbody>
';
foreach($results as $inscrit){

	echo "<tr>";
		echo "
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>

		";
	echo "</tr>";
	
}
echo "</tbody>
</table>";
?>
