<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Kursi</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>no_baris</label>
            <input type="text" name="no_baris" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>no_kursi</label>
            <input type="text" name="no_kursi" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id_kursi" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
