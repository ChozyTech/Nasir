<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">Edit Data Peserta</h3>
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
	                <h4 class="card-title" id="horz-layout-colored-controls">Berikut ini adalah informasi data peserta Program Keluarga Harapan.</h4>
	            </div>
	            <div class="card-content collpase show">
	                <div class="card-body">
                        <form class="steps-validation" id="editdataform" name="editdataform" role="form" method="post" action="<?php echo base_url(); ?>data/update">

                            <!-- Input Data Peserta -->
                            <h6>Data Peserta</h6>
                            <fieldset>
                                <input id="iddata" name="iddata" type="hidden" value="<?php echo $DataPeserta['Id']; ?>"/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nopeserta">
                                                No. Peserta :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="No. Peserta" id="nopeserta" name="nopeserta" value="<?php echo $DataPeserta['NoPeserta']; ?>" disabled />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="namapeserta">
                                                Nama Peserta :
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="Nama Peserta" id="namapeserta" name="namapeserta" value="<?php echo $DataPeserta['NamaPeserta']; ?>" />
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
                                            <input type="text" class="form-control required" placeholder="Nama Ibu Kandung" id="namaibu" name="namaibu" value="<?php echo $DataPeserta['NamaIbu']; ?>" />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="norek">
                                                No. Rekening / Bank :
                                            </label>
                                            <input type="text" class="form-control" placeholder="No. Rekening / Bank" id="norek" name="norek" value="<?php echo $DataPeserta['NoRek']; ?>" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="alamat">Alamat :</label>
											<textarea class="form-control border-primary" placeholder="Alamat" rows="3" id="alamat" name="alamat" ><?php echo $DataPeserta['Alamat']; ?></textarea>
                                        </div>
                                    </div>
                                                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nokk">
                                                No. Kartu Keluarga
                                                <span class="danger">*</span>
                                            </label>
                                            <input type="text" class="form-control required" placeholder="No. Kartu Keluarga" id="nokk" name="nokk" value="<?php echo $DataPeserta['NoKK']; ?>" />
                                        </div>
                                    </div>
 
                                </div>
                                <div class="row">
                                                           <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keterangan">Keterangan :</label>
											<textarea class="form-control border-primary" placeholder="Keterangan" rows="5" id="keterangan" name="keterangan" ><?php echo $DataPeserta['Keterangan']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <!-- Input Data Kriteria -->
                            <h6>Data Kriteria</h6>
                            <fieldset>
                                <div class="row">
                                    <?php
                                    $i = 0;
                                    $rank = array("SangatMampu", "CukupMampu", "TidakMampu", "SangatTidakMampu");
                                    foreach ($DataKriteria as $value) {
                                        if ($DataDetail != null){
                                            if ($value['Id'] == $DataDetail[$i]['IdKriteria']){
                                    		echo "<div class=\"col-md-6\">";
                                    		echo "<div class=\"form-group\">";
                                    		echo "<label for=\"".$value['Id']."\">";
                                    		echo $value['NamaKriteria'];
                                    		echo "<span class=\"danger\">*</span>";
                                    		echo "</label>";
                                            if ($value['IsNumeric'] == 0){
                                            echo "<select class=\"form-control required\" id=\"".$value['Id']."\" name=\"". $value['Id']."\" >";
                                            for($z=0;$z<4;$z++){
                                                if (($z+1) == $DataDetail[$i]['Nilai']){
                                                  echo "<option value=\"".($z+1)."\" selected >".$value[$rank[$z]]."</option>";  
                                                }
                                                else{
                                                  echo "<option value=\"".($z+1)."\">".$value[$rank[$z]]."</option>";    
                                                }
                                            }
                                            echo "</select>";
                                            }
                                            else{
                                               echo "<input type=\"text\" class=\"form-control required\" id=\"".$value['Id']."\" name=\"". $value['Id']."\" value=\"".$DataDetail[$i]['Nilai'] ."\"  />";
                                            }
                                    		echo "</div>";
                                            echo "</div>";
                                            $i++;
                                            }
                                        }
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