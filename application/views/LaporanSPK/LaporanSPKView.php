<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">Laporan SPK Perhitungan Topsis</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
         <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Laporan</a>
                  </li>
                  <li class="breadcrumb-item active">Laporan SPK Perhitungan Topsis
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="content-body">
<!-- Vertical Tabs start -->
<section id="vertical-tabs">
	<div class="row match-height">
	<div class="col-sm-12">
            <div id="with-header" class="card">
               <div class="card-header">
                  <h4 class="card-title">Berikut ini laporan SPK perhitungan Topsis.</h4>
               </div>
				<div class="card-content">
					<div class="nav-vertical p-2">
							<ul class="nav nav-tabs nav-left">
								<li class="nav-item">
								<a class="nav-link active" id="datapeserta" data-toggle="tab" aria-controls="tabDataPeserta" href="#tabDataPeserta" aria-expanded="true"><i class="ft-users"></i> &nbsp;&nbsp;Data Peserta</a>
								</li>
                                <li class="nav-item">
								<a class="nav-link" id="bobot" data-toggle="tab" aria-controls="tabBobot" href="#tabBobot" aria-expanded="false"><i class="ft-tag"></i> &nbsp;&nbsp;Bobot Kriteria</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" id="konversi" data-toggle="tab" aria-controls="tabKonversi" href="#tabKonversi" aria-expanded="false"><i class="ft-trending-up"></i> &nbsp;&nbsp;Tabel Konversi</a>
								</li>
								<li class="nav-item">
								<a class="nav-link" id="normalisasi" data-toggle="tab" aria-controls="tabNormalisasi" href="#tabNormalisasi" aria-expanded="false"><i class="ft-box"></i> &nbsp;&nbsp;Normalisasi</a>
								</li>
                                <li class="nav-item">
								<a class="nav-link" id="solusiideal" data-toggle="tab" aria-controls="tabSolusiIdeal" href="#tabSolusiIdeal" aria-expanded="false"><i class="ft-check-square"></i> &nbsp;&nbsp;Matriks Solusi Ideal</a>
								</li>
                                <li class="nav-item">
								<a class="nav-link" id="hasil" data-toggle="tab" aria-controls="tabHasil" href="#tabHasil" aria-expanded="false"><i class="ft-file-text"></i> &nbsp;&nbsp;Hasil Akhir</a>
								</li>
							</ul>
							<div class="tab-content px-1">
								<div role="tabpanel" class="tab-pane active" id="tabDataPeserta" aria-expanded="true" aria-labelledby="datapeserta">
                                    <table style="width:100%" class="table table-striped table-bordered tabledatapeserta">
                                       <thead>
                                          <tr>
                                             <th width="30%" style="text-align: center;vertical-align: middle;" rowspan="2">Penerima Bantuan PKH</th>
                                             <th width="70%" style="text-align: center;vertical-align: middle;" colspan="8">Kriteria</th>
                                          </tr>
                                          <tr>
                                          
                                          <?php
                                            foreach ($DataKriteria as $value) {
                                            		echo "<th>".$value['Nama']."</th>";
                                            }
                                            ?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            foreach ($DataPeserta as $value) {
                                            		echo "<tr>";
                                                    echo "<td>" . $value['Nama'] ."</td>";
                                                    foreach($value['Detail'] as $valuedetail){
                                                        if ($valuedetail['IdKriteria'] == 1){
                                                            echo "<td>" . $valuedetail['NilaiInput'] . " m2 </td>";   
                                                        }
                                                        else if ($valuedetail['IdKriteria'] == 8){
                                                            echo "<td> Rp. " . number_format((float)$valuedetail['NilaiInput'],2,',','.') . " </td>";   
                                                        }
                                                        else{
                                                            echo "<td>" . $valuedetail['NilaiInput'] . "</td>";
                                                        }
                                                    }
                                                    echo "</tr>";
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
								<div class="tab-pane" id="tabBobot" aria-labelledby="bobot">
									 <table style="width:100%" class="table table-striped table-bordered tablebobot">
                                       <thead>
                                          <tr>
                                             <th>Kriteria</th>
                                             <th>Bobot</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            foreach ($DataKriteria as $value) {
                                            		echo "<tr>";
                                                    echo "<td>" . $value['Nama'] ."</td>";
                                                    echo "<td>" . $value['Bobot'] ."</td>";
                                                    echo "</tr>";
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
								<div class="tab-pane" id="tabKonversi" aria-labelledby="konversi">
									<table style="width:100%" class="table table-striped table-bordered tablekonversi">
                                       <thead>
                                          <tr>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">No</th>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">Alternatif</th>
                                             <th width="70%" style="text-align: center;vertical-align: middle;" colspan="8">Kriteria</th>
                                          </tr>
                                          <tr>
                                          
                                          <?php
                                            $i = 1;
                                            foreach ($DataKriteria as $value) {
                                            		echo "<th> C".$i."</th>";
                                                    $i++;
                                            }
                                            ?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 1;
                                            foreach ($DataPeserta as $value) {
                                            		echo "<tr>";
                                                    echo "<td>". $i ."</td>";
                                                    echo "<td> A" . $i ."</td>";
                                                    foreach($value['Detail'] as $valuedetail){
                                                        echo "<td>" . $valuedetail['NilaiAlias'] . "</td>";
                                                    }
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tabNormalisasi" aria-labelledby="normalisasi">
                                <p><strong>Rumus Normalisasi: </strong>Nilai Konversi / &radic;<span style="text-decoration:overline;"> Konversi A1<sup>2</sup> + Konversi A2<sup>2</sup> + ... Konversi AN<sup>2</sup></span> </p>
									<table style="width:100%" class="table table-striped table-bordered tablenormalisasi">
                                       <thead>
                                          <tr>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">No</th>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">r</th>
                                             <th width="70%" style="text-align: center;vertical-align: middle;" colspan="8">Kriteria</th>
                                          </tr>
                                          <tr>
                                          
                                          <?php
                                            $i = 1;
                                            foreach ($DataKriteria as $value) {
                                            		echo "<th> C".$i."</th>";
                                                    $i++;
                                            }
                                            ?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($DataPeserta as $value) {
                                            		echo "<tr>";
                                                    echo "<td>". ($i+1) ."</td>";
                                                    echo "<td> r" . ($i+1) ."</td>";
                                                    $z = 0;
                                                    foreach($DataR[$i] as $valuer){
                                                        echo "<td>" . round($valuer,4) . "</td>";
                                                        $z++;
                                                    }
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tabSolusiIdeal" aria-labelledby="solusiideal">
                                <p><strong>Rumus Solusi Ideal: </strong>Nilai Konversi * Nilai r</p>
									<table style="width:100%" class="table table-striped table-bordered tablesolusiideal">
                                       <thead>
                                          <tr>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">No</th>
                                             <th width="15%" style="text-align: center;vertical-align: middle;" rowspan="2">y</th>
                                             <th width="70%" style="text-align: center;vertical-align: middle;" colspan="8">Kriteria</th>
                                          </tr>
                                          <tr>
                                          
                                          <?php
                                            $i = 1;
                                            foreach ($DataKriteria as $value) {
                                            		echo "<th> C".$i."</th>";
                                                    $i++;
                                            }
                                            ?>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($DataPeserta as $value) {
                                            		echo "<tr>";
                                                    echo "<td>". ($i+1) ."</td>";
                                                    echo "<td> y" . ($i+1) ."</td>";
                                                    $z = 0;
                                                    foreach($DataY[$i] as $valuey){
                                                        echo "<td>" . round($valuey,4) . "</td>";
                                                        $z++;
                                                    }
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                    <br />
                                    <table style="width:100%" class="table table-striped table-bordered tableYi">
                                       <thead>
                                          <tr>
                                             <th>Yi</th>
                                             <th>MAX(A<sup>+</sup>)</th>
                                             <th>MIN(A<sup>-</sup>)</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($DataYi as $value) {
                                            		echo "<tr>";
                                                    echo "<td> Y" . ($i+1) ."</td>";
                                                    echo "<td>" . round($DataAPlus[$i],4) ."</td>";
                                                    echo "<td>" . round($DataAMin[$i],4) ."</td>";
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                    <br />
                                    <p><strong>Rumus S<sup>+</sup>: </strong>&radic;<span style="text-decoration:overline;">( MAX(A<sup>+</sup>)1 - Y1 )<sup>2</sup> + ( MAX(A<sup>+</sup>)2 - Y2 )<sup>2</sup> ... +( MAX(A<sup>+</sup>)n - Yn )<sup>2</sup></span></p>
                                    <table style="width:100%" class="table table-striped table-bordered tableSPlus">
                                       <thead>
                                          <tr>
                                             <th>S<sup>+</sup></th>
                                             <th>Nilai</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($DataSPlus as $value) {
                                            		echo "<tr>";
                                                    echo "<td> S<sup>+</sup>" . ($i+1) ."</td>";
                                                    echo "<td>" . round($value,4) ."</td>";
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                    <br />
                                    <p><strong>Rumus S<sup>-</sup>: </strong>&radic;<span style="text-decoration:overline;">( MIN(A<sup>-</sup>)1 - Y1 )<sup>2</sup> + ( MIN(A<sup>-</sup>)2 - Y2 )<sup>2</sup> ... +( MIN(A<sup>-</sup>)n - Yn )<sup>2</sup></span></p>
                                    <table style="width:100%" class="table table-striped table-bordered tableSMin">
                                       <thead>
                                          <tr>
                                             <th>S<sup>-</sup></th>
                                             <th>Nilai</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $i = 0;
                                            foreach ($DataSMin as $value) {
                                            		echo "<tr>";
                                                    echo "<td> S<sup>-</sup>" . ($i+1) ."</td>";
                                                    echo "<td>" . round($value,4) ."</td>";
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane" id="tabHasil" aria-labelledby="hasil">
                                <p><strong>Rumus V:</strong> S<sup>-</sup> / (S<sup>-</sup> + S<sup>+</sup>)
									 <table style="width:100%" class="table table-striped table-bordered tablehasil">
                                       <thead>
                                          <tr>
                                             <th>V</th>
                                             <th>Nilai</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        $i = 0;
                                            foreach ($DataPeserta as $value) {
                                            		echo "<tr>";
                                                    echo "<td> V" . ($i+1) ."</td>";
                                                    echo "<td>" . $value['NilaiAkhir'] ."</td>";
                                                    echo "</tr>";
                                                    $i++;
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                <p><strong>Hasil Akhir (5 Teratas) :</strong>
                                	<table style="width:100%" class="table table-striped table-bordered tabletop5">
                                       <thead>
                                          <tr>
                                             <th>Nama</th>
                                             <th>Nilai</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                        $i = 0;
                                            foreach ($DataPesertaV as $value) {
                                                if ($i < 5){
                                            		echo "<tr>";
                                                    echo "<td>" . $value['Nama'] ."</td>";
                                                    echo "<td>" . $value['NilaiAkhir'] ."</td>";
                                                    echo "</tr>";
                                                    $i++;
                                                }
                                                else{
                                                    break;
                                                }
                                            }
                                        ?>
                                          
                                       </tbody>
                                    </table>
                                </div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Vertical Tabs end -->
      </div>
   </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
