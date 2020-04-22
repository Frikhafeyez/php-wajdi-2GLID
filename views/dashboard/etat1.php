
<div class="card">
            <div class="card-header">
              <h2 class="card-title"><b>Etat des inscrit par pays</b></h2>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
<form method="post" action="evenement_dashboard_etat1.html">
<div class="card-body">      
				   <div class="form-group">
                    <label for="exampleInputEmail1">Pays</label>
                    <select name="pays" class="form-control" required>
						<option value="tunisie">tunisie</option>
						<option value="france">france</option>
						<option value="algerie">algerie</option>
					</select>
                  </div>
				<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Recherche</button>
                </div>
                </div>
</form>

<div style="display: inline-block; width:100%">
<table style="float:right">
<tr>
<td>
<a href="pdf_dashboard_pdfetat1_<?php echo $pays;?>.html" target="_blank"><img src="images/pdf.png" width="40"></a>
</td>
<td>
<a href="excel_dashboard_exceletat1_<?php echo $pays;?>.html" target="_blank"><img src="images/excel.png" width="40"></a>
</td>
</tr>
</table>
</div>
<?php
echo ' <table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
	<th>photo</th>
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
			<td><img src='photos/".$inscrit->photo."' height='70'></td>
			<td>".$inscrit->nom."</td>
			<td>".$inscrit->prenom."</td>
			<td>".$inscrit->email."</td>
			
			<td>".$inscrit->tel."</td>
			<td>".$inscrit->pays."</td>

		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>photo</th>
	<th>nom</th>
	<th>prenom</th>
	<th>email</th>
	<th>tel</th>
	<th>pays</th>
</tr></tfoot>
</table>";
?>
</div>
</div>
