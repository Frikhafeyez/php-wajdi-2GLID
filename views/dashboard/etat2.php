

<div class="card">
            <div class="card-header">
              <h2 class="card-title"><b>Base de données des emails</b></h2>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
<form method="post" action="evenement_dashboard_etat2.html">
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
<?php
echo ' <table id="example1" class="table table-bordered table-striped">
<thead>
<tr>
	<th>email</th>
</tr>
</thead>
<tbody>
';
foreach($results as $inscrit){

	echo "<tr>";
		echo "
			<td>".$inscrit->email."</td>

		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>email</th>
</tr>
</tfoot>
</table>";
?>
</div>
</div>
