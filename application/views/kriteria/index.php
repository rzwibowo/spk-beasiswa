<div class="row" id="app">
	<!-- BEGIN form input -->
	<div class="col-md-6">
	  <div class="card">
	    <div class="card-header">
	      Input Data 
	      <strong>Kriteria</strong>
	    </div>
	    <div class="card-body">
	      <form action="" method="post" class="form-horizontal">
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label" for="nim">Kode</label>
	          <div class="col-md-9">
	            <input type="text" id="kode_kriteria" name="kode_kriteria" v-model="kriteria.kode_kriteria" class="form-control" placeholder="Masukkan Kode">
	          </div>
	        </div>
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label" for="nama">Nama</label>
	          <div class="col-md-9">
	            <input type="text" id="nama_kriteria" name="nama_kriteria" v-model="kriteria.nama_kriteria" class="form-control" placeholder="Masukkan Nama">
	          </div>
	        </div>
	        <div class="form-group row">
	          <label class="col-md-3 col-form-label" for="nama">Bobot</label>
	          <div class="col-md-9">
	            <input type="text" id="bobot_kriteria" name="bobot_kriteria" v-model="kriteria.bobot_kriteria" class="form-control" placeholder="Masukkan Bobot">
	          </div>
	        </div>
	       </form>
	    </div>
	    <div class="card-footer">
	      <button type="submit" class="btn btn-sm btn-primary"  v-on:click="Save">
	        <i class="fa fa-dot-circle-o"></i> Simpan</button>
	      <button type="reset" v-on:click="reset" class="btn btn-sm btn-danger">
	        <i class="fa fa-ban"></i> Reset</button>
	    </div>
	  </div>
	</div>
	<!-- END form input -->

	<!-- START list -->
	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    Daftar <strong>kriteria</strong>
		  </div>
		  <div class="card-body">
		    <table class="table table-responsive-sm table-striped">
		      <thead>
		        <tr>
		          <th>#</th>
		          <th>Kode Kriteria</th>
		          <th>Nama Kriteria</th>
		          <th>Bobot</th>
		          <th></th>
		        </tr>
		        <tr>
		          <th></th>
		          <th><input type="text" name="kode_kriteria" class="form-control" v-model="FilterModel.kode_kriteria" v-on:keyup="ChangeFilter(FilterModel.kode_kriteria)"></th>
		          <th><input type="text" name="nama_kriteria" class="form-control" v-model="FilterModel.nama_kriteria" v-on:keyup="ChangeFilter(FilterModel.nama_kriteria)"></th>
		          <th><input type="text" name="bobot_kriteria" class="form-control" v-model="FilterModel.bobot_kriteria" v-on:keyup="ChangeFilter(FilterModel.bobot_kriteria)"></th>
		          <th></th>
		        </tr>
		      </thead>
		      <tbody>
		       <tr v-for="(kriteria,index) in kriterias">
		       	<td>{{index + 1}}</td>
		       	<td>{{kriteria.kode_kriteria}}</td>
		       	<td>{{kriteria.nama_kriteria}}</td>
		       	<td> <button type="button" class="btn btn-sm btn-primary" v-on:click="Edit(kriteria.id_kriteria)">
	                 <i class="fa fa-pencil"></i> Edit</button>
	                <button type="button" class="btn btn-sm btn-success" v-on:click="View(kriteria.id_kriteria)">
	                <i class="fa fa-dot-circle-o"></i> View</button>
	                <button type="button" class="btn btn-sm btn-danger" v-on:click="Delete(kriteria.id_kriteria)">
	                <i class="fa fa-minus-circle"></i> Delete</button>
	            </td>
		       </tr>
		      </tbody>
		    </table>
		 <!--    <ul class="pagination">
		      <li class="page-item">
		        <a class="page-link" href="#">Prev</a>
		      </li>
		      <li class="page-item active">
		        <a class="page-link" href="#">1</a>
		      </li>
		      <li class="page-item">
		        <a class="page-link" href="#">2</a>
		      </li>
		      <li class="page-item">
		        <a class="page-link" href="#">3</a>
		      </li>
		      <li class="page-item">
		        <a class="page-link" href="#">4</a>
		      </li>
		      <li class="page-item">
		        <a class="page-link" href="#">Next</a>
		      </li>
		    </ul> -->
		  </div>
		</div>
	</div>
	<!-- END list -->

	<!-- BEGIN modal detail -->
	<div class="modal fade" id="detail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-info modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h4 class="modal-title">Detail kriteria</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	      	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
	      	  <div class="form-group row">
	      	    <label class="col-md-3 col-form-label">Kode Kriteria</label>
	      	    <div class="col-md-9">
	      	      <p class="form-control-static"><b>{{kriteriaView.kode_kriteria}}</b></p>
	      	    </div>
	      	  </div>
	      	  <div class="form-group row">
	      	    <label class="col-md-3 col-form-label">Nama Kriteria</label>
	      	    <div class="col-md-9">
	      	      <p class="form-control-static"><b>{{kriteriaView.nama_kriteria}}</b></p>
	      	    </div>
	      	  </div>
	      	  <div class="form-group row">
	      	    <label class="col-md-3 col-form-label">Bobot Kriteria</label>
	      	    <div class="col-md-9">
	      	      <p class="form-control-static"><b>{{kriteriaView.bobot_kriteria}}</b></p>
	      	    </div>
	      	  </div>
	      	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
	<!-- END modal detail -->
</div>
<script type="text/javascript">

var app = new Vue({
  el: '#app',
  created(){
    this.GetData();
  },
  data: {
  	kriteria:{},
  	kriterias:[],
  	FilterModel:[],
  	kriteriaView:{}
  },
  methods: {
    Save() 
    {
    	axios
    	.post('http://localhost/spk-beasiswa/index.php/api/kriteria/kriteria',{
          body: this.kriteria
    	})
        .then(response => {
        	this.GetData();
        	this.reset();
       })
       .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.GetData())
   },
   GetData()
   {
      axios
    	.post('http://localhost/spk-beasiswa/index.php/api/kriteria/kriterias',{
    		body: this.Filter()
    	})
        .then(response => {
        	this.kriterias =  response.data;
       })
       .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false )

   },
   reset()
   {
   	this.kriteria = {};
   },
   Filter()
   {
      var FilterParam = {};
      if(this.FilterModel.kode_kriteria !== "" && this.FilterModel.kode_kriteria !== null ){
        FilterParam.kode_kriteria =this.FilterModel.kode_kriteria;
      }
      if(this.FilterModel.nama_kriteria !== null && this.FilterModel.nama_kriteria !== "" ){
        FilterParam.nama =this.FilterModel.nama_kriteria;
      }
      if(this.FilterModel.bobot_kriteria !== null && this.FilterModel.bobot_kriteria !== "" ){
        FilterParam.bobot_kriteria =this.FilterModel.bobot_kriteria;
      }
      return FilterParam;
   },
   ChangeFilter(Param)
   {
   	if(Param.length > 2){
        this.GetData();
    }else if(Param.length == 0){
          this.GetData();
    }

   },
   Edit(Id)
   {
     axios
    	.get('http://localhost/spk-beasiswa/index.php/api/kriteria/GetDataKriteriaById/'+Id)
        .then(response => {
        	this.kriteria =  response.data;
       })
       .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false )
   },
   Delete(Id)
   {
   	var x = confirm("Are you sure you want to delete?");
    if (x){
       axios
   	   .get('http://localhost/spk-beasiswa/index.php/api/kriteria/kriteriadelete/'+Id)
        .then(response => {
        this.GetData();
       })
       .catch(error => {
        console.log(error)
        this.errored = true
       })
       .finally(() => this.loading = false )
    }
   },
   View(Id)
   {
   	axios
    	.get('http://localhost/spk-beasiswa/index.php/api/kriteria/GetDataKriteriaById/'+Id)
        .then(response => {
        	this.kriteriaView =  response.data;
         	$("#detail-modal").modal('show');
       })
       .catch(error => {
        console.log(error)
        this.errored = true
      })
      .finally(() => this.loading = false )
   }
  }
})

loaderStop()      
</script>