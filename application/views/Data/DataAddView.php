<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">New Data Peserta</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
         <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Data</a>
                  </li>
				  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>data">Data Peserta Program Keluarga Harapan</a>
                  </li>
                  <li class="breadcrumb-item active">New
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
	                <h4 class="card-title" id="horz-layout-colored-controls">Berikut ini adalah informasi data peserta Program Keluarga Harapan.</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
                        <form class="steps-validation" id="adddataform" name="adddataform" role="form" method="post" action="<?php echo base_url(); ?>data/insert">

                            <!-- Input Data Peserta -->
                            <h6>Data Peserta</h6>
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nopeserta">
                                                No. Peserta :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="No. Peserta" id="nopeserta" name="nopeserta" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namapeserta">
                                                Nama Peserta :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="Nama Peserta" id="namapeserta" name="namapeserta" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namaibu">
                                                Nama Ibu Kandung :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="Nama Ibu Kandung" id="namaibu" name="namaibu" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="norek">
                                                No. Rekening / Bank :
                                            </label>
                                            <input type="text" class="form-control" placeholder="No. Rekening / Bank" id="norek" name="norek" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat :</label>
											<textarea class="form-control border-primary" placeholder="Alamat" rows="3" id="alamat" name="alamat" ></textarea>
                                        </div>
                                    </div>
                                                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nokk">
                                                No. Kartu Keluarga
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="No. Kartu Keluarga" id="nokk" name="nokk" />
                                        </div>
                                    </div>
 
                                </div>
                                <div class="row">
                                                           <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan :</label>
											<textarea class="form-control border-primary" placeholder="Keterangan" rows="5" id="keterangan" name="keterangan" ></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Input Data Kriteria -->
                            <h6>Data Kriteria</h6>
                            <fieldset>
                                <div class="row">
                                    <?php
                                    foreach ($DataKriteria as $value) {
                                    		echo "<div class=\"col-md-6\">";
                                    		echo "<div class=\"form-group\">";
                                    		echo "<label for=\"".$value['Id']."\">";
                                    		echo $value['NamaKriteria'];
                                    		echo "<span class=\"danger\">*</span>";
                                    		echo "</label>";
                                            if ($value['IsNumeric'] == 0){
                                            echo "<select class=\"form-control required\" id=\"".$value['Id']."\" name=\"". $value['Id']."\" >";
                                            echo "<option value=\"1\">".$value['SangatMampu']."</option>";
                                            echo "<option value=\"2\">".$value['CukupMampu']."</option>";
                                            echo "<option value=\"3\">".$value['TidakMampu']."</option>";
                                            echo "<option value=\"4\">".$value['SangatTidakMampu']."</option>";
                                            echo "</select>";
                                            }
                                            else{
                                               echo "<input type=\"text\" class=\"form-control required\" id=\"".$value['Id']."\" name=\"". $value['Id']."\" />";
                                            }
                                    		echo "</div>";
                                            echo "</div>";
                                    }
                                    ?>
                                </div>
                            </fieldset>
                        </form>
                        </div>
                    </div>
                </div>
	        </div>
	    </div>
   </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->