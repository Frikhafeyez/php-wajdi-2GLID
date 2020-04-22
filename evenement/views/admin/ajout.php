<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter un administrateur</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" action="index.php?controller=admin&action=add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" required placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" required placeholder="Enter last name">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">login</label>
                    <input type="text" name="login" class="form-control" id="exampleInputEmail1" required placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">mot de passe</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="password" name="password" class="form-control" id="exampleInputpassword">
                      </div>
                    </div>
                  </div>
				  
				  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>
              </form>
            </div>
		</div>
	</div>
</div>


