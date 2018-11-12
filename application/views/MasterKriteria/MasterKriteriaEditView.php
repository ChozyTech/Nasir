<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">Edit Kriteria</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
         <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Master Data</a>
                  </li>
				  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masterkriteria">Master Kriteria</a>
                  </li>
                  <li class="breadcrumb-item active">Edit
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="content-body">
      <section class="row">
	  </section>
		<div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <h4 class="card-title" id="horz-layout-colored-controls">Berikut ini adalah data informasi kriteria.</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
	                    <form class="form form-horizontal" id="editkriteriaform" name="editkriteriaform" role="form" method="post" action="<?php echo base_url(); ?>masterkriteria/update">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="ft-eye"></i>Kriteria Details</h4>
								<input id="idkriteria" name="idkriteria" type="hidden" value="<?php echo $DataKriteria['Id']; ?>"/>
	                    		<div class="row">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="kodekriteria">Kode Kriteria</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="kodekriteria" name="kodekriteria" class="form-control border-primary" placeholder="Kode Kriteria" value="<?php echo $DataKriteria['Kode']; ?>" disabled />
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="namakriteria">Nama Kriteria</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="namakriteria" name="namakriteria" class="form-control border-primary" placeholder="Nama Kriteria" value="<?php echo $DataKriteria['Nama']; ?>" required />
			                        		</div>
				                        </div>
			                        </div>
		                        </div>
		                        <div class="row">
								<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="bobot">Bobot</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="bobot" name="bobot" class="form-control border-primary" placeholder="Bobot" value="<?php echo $DataKriteria['Bobot']; ?>" />
				                            </div>
				                        </div>
				                    </div>
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="keterangan">Keterangan</label>
				                        	<div class="col-md-9">
												 <textarea class="form-control border-primary" placeholder="Keterangan" rows="5" id="keterangan" name="keterangan" ><?php echo $DataKriteria['Keterangan']; ?></textarea>
											</div>
				                        </div>
		                        	</div>
		                        </div>		                      
								<h4 class="form-section"><i class="ft-eye"></i>Kriteria Rank Details</h4>
	                    		<div class="row">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="sangattidakmampu">Sangat Tidak Mampu</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="sangattidakmampu" name="sangattidakmampu" class="form-control border-primary" placeholder="Sangat Tidak Mampu" value="<?php echo $DataKriteria['SangatTidakMampu']; ?>" required />
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="tidakmampu">Tidak Mampu</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="tidakmampu" name="tidakmampu" class="form-control border-primary" placeholder="Tidak Mampu" value="<?php echo $DataKriteria['TidakMampu']; ?>" required />
			                        		</div>
				                        </div>
			                        </div>
		                        </div>	
								<div class="row">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="cukupmampu">Cukup Mampu</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="cukupmampu" name="cukupmampu" class="form-control border-primary" placeholder="Cukup Mampu" value="<?php echo $DataKriteria['CukupMampu']; ?>" required />
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="sangatmampu">Sangat Mampu</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="sangatmampu" name="sangatmampu" class="form-control border-primary" placeholder="Sangat Mampu" value="<?php echo $DataKriteria['SangatMampu']; ?>" required />
			                        		</div>
				                        </div>
			                        </div>
		                        </div>	
								<div class="row">
		                        	<div class="col-md-6">
			                        	<div class="form-group row">
										<label class="col-md-3 label-control" for="aktif"> Aktif</label>
										
										<div class="col-md-9">
											<input class="form-check-input" id="aktif" name="aktif" type="checkbox" <?php if($DataKriteria['StatusAktif'] == '1') echo "checked" ?> >	
										</div>
										 </div>
			                       	</div>
		                        </div>
									
							</div>
							 <div class="form-actions right">
	                            <a href="<?php echo base_url(); ?>masterkriteria"><button type="button" class="btn btn-danger mr-1">
	                            	<i class="ft-x"></i> Cancel
	                            </button></a>
	                            <button type="submit" class="btn btn-primary">
	                                <i class="la la-check-square-o"></i> Save
	                            </button>
	                        </div>
	                    </form>

	                </div>
	            </div>
	        </div>
	    </div>
   </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->