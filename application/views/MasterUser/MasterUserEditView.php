<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">Edit User</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
         <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Master Data</a>
                  </li>
				  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>masteruser">Master User</a>
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
	                <h4 class="card-title" id="horz-layout-colored-controls">Berikut ini adalah data informasi user.</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
	                    <form class="form form-horizontal" id="edituserform" name="edituserform" role="form" method="post" action="<?php echo base_url(); ?>masteruser/update">
	                    	<div class="form-body">
	                    		<h4 class="form-section"><i class="ft-eye"></i>User Details</h4>
								<input id="iduser" name="iduser" type="hidden" value="<?php echo $DataUser['Id']; ?>"/>
	                    		<div class="row">
	                    			<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="username">Username</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="username" name="username" class="form-control border-primary" placeholder="Username" value="<?php echo $DataUser['Username']; ?>" disabled />
				                            </div>
				                        </div>
				                    </div>
				                    <div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="nama">Nama</label>
				                        	<div class="col-md-9">
				                            	<input type="text" id="nama" name="nama" class="form-control border-primary" placeholder="Nama" value="<?php echo $DataUser['Nama']; ?>" required />
			                        		</div>
				                        </div>
			                        </div>
		                        </div>
		                        <div class="row">
		                        	<div class="col-md-6">
			                        	<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="alamat">Alamat</label>
				                        	<div class="col-md-9">
												<textarea class="form-control border-primary" placeholder="Alamat" rows="3" id="alamat" name="alamat" data-parsley-maxlength="255" ><?php echo $DataUser['Alamat']; ?></textarea>
			                        		</div>
			                       		</div>
			                       	</div>
			                       	<div class="col-md-6">
				                        <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="email">Email</label>
				                        	<div class="col-md-9">
				                            	<input type="email" class="form-control border-primary" placeholder="Email" id="email" name="email" value="<?php echo $DataUser['Email']; ?>"  />
			                        		</div>
				                        </div>
				                    </div>
		                        </div>		                      
		                        <div class="row">
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="nohp">No. HP</label>
				                        	<div class="col-md-9">
												<input type="text" id="nohp" name="nohp" class="form-control border-primary" placeholder="No. HP" value="<?php echo $DataUser['NoHP']; ?>"  />
				                        	</div>
					                    </div>

					                    <div class="form-group row">
				                        	<label class="col-md-3 label-control" for="level">Level</label>
				                        	<div class="col-md-9">
												<select class="form-control border-primary" id="level" name="level" style="width: 100%; height:36px;" >
										<?php
											foreach ($DataLevel as $value) {
												if ($value['Id'] == $DataUser['IdLevel']){
													echo "<option value=\"".$value['Id']."\" selected>".$value['Nama']."</option>";
												}
												else{
													echo "<option value=\"".$value['Id']."\">".$value['Nama']."</option>";
												}
											}
											?>
									</select>
											</div>
										</div>
		                        	</div>
		                        	<div class="col-md-6">
		                        		<div class="form-group row">
				                        	<label class="col-md-3 label-control" for="keterangan">Keterangan</label>
				                        	<div class="col-md-9">
												 <textarea class="form-control border-primary" placeholder="Keterangan" rows="5" id="keterangan" name="keterangan" ><?php echo $DataUser['Keterangan']; ?></textarea>
											</div>
				                        </div>
		                        	</div>
		                        </div>
								<div class="row">
		                        	<div class="col-md-6">
			                        	<div class="form-group row">
										<label class="col-md-3 label-control" for="aktif"> Aktif</label>
										
										<div class="col-md-9">
											<input class="form-check-input" id="aktif" name="aktif" type="checkbox" <?php if($DataUser['IsActive'] == '1') echo "checked" ?> >	
										</div>
										 </div>
			                       	</div>
		                        </div>		
							</div>
							 <div class="form-actions right">
	                            <a href="<?php echo base_url(); ?>masteruser"><button type="button" class="btn btn-danger mr-1">
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