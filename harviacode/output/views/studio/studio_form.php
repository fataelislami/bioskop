<div class="row">
  <div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Studio</h4>
            <form class="form-material m-t-40" method="post" action="<?php echo base_url().$action ?>">
	  <div class="form-group">
            <label>nama_studio</label>
            <input type="text" name="nama_studio" class="form-control" placeholder="">
    </div>
	  <div class="form-group">
            <label>harga</label>
            <input type="text" name="harga" class="form-control" placeholder="">
    </div>
	    <input type="hidden" name="id_studio" /> 
	
                <div class="form-group">
                  <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
