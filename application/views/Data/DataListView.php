<div class="app-content content">
<div class="content-wrapper">
   <div class="content-wrapper-before"></div>
   <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
         <h3 class="content-header-title">Data Peserta Program Keluarga Harapan</h3>
      </div>
      <div class="content-header-right col-md-8 col-12">
         <div class="breadcrumbs-top float-md-right">
            <div class="breadcrumb-wrapper mr-1">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Data</a>
                  </li>
                  <li class="breadcrumb-item active">Data Peserta Program Keluarga Harapan
                  </li>
               </ol>
            </div>
         </div>
      </div>
   </div>
   <div class="content-body">
      <section class="row">
         <div class="col-sm-12">
            <div id="with-header" class="card">
               <div class="card-header">
                  <h4 class="card-title">Berikut ini adalah peserta Program Keluarga Harapan yang telah terdaftar.</h4>
               </div>
               <div class="card-content collapse show">
                  <div class="card-body border-top-blue-grey border-top-lighten-5 ">
                     <div class="card-content collpase show">
                        <div class="card-body card-dashboard">
                           <table class="table table-striped table-bordered tabledatapkhdetail">
                              <thead>
                                 <tr>
                                    <th>Action</th>
                                    <th>No. Peserta</th>
                                    <th>Nama Peserta</th>
                                    <th>Alamat</th>
									<th>Keterangan</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    foreach ($DataPeserta as $value) {
                                    		echo "<tr>";
                                    		echo "<div>";
                                    		echo "<td>";
                                    		echo "<center><a href=\"" . base_url() . "data/detail/". $value['Id'] . "\" class=\"waves-effect\"><i class=\"ft-eye \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"View\"></i> </a>&nbsp;&nbsp;";
                                    		echo "<a href=\"" . base_url() . "data/edit/". $value['Id'] . "\" class=\"waves-effect\"><i class=\"ft-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\"></i> </a>&nbsp;&nbsp;";
                                    		echo "<a href=\"#\" class=\"waves-effect delete-data\" id=\"".$value['Id']."-".$value['NoPeserta']."-".$this->session->userdata('iduser')."\"><i class=\"ft-trash-2 \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"></i> </a>";
                                    		echo "</center></div>";
                                    		echo "</td>";
                                    		echo "<td>" . $value['NoPeserta'] . "</td>";
                                    		echo "<td>" . $value['Nama'] . "</td>";
                                    		echo "<td>" . $value['Alamat'] . "</td>";
                                    		echo "<td>" . $value['Keterangan'] . "</td>";
                                    		echo "</tr>";
                                    }
                                    ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </section>
      </div>
   </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
