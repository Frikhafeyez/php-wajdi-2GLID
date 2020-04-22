<?php 
$contenu='<table border="1">
<tr>
<th>col1</th><th>col2</th><th>col3</th>
</tr>
<tr>
<td>case1</td><td>case2</td><td>case3</td>
</tr>
<tr>
<td>case1</td><td>case2</td><td>case3</td>
</tr>
<tr>
<td>case1</td><td>case2</td><td>case3</td>
</tr>
</table>';

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachement; filename=doc_ecxel.xls");

echo $contenu;
?> 