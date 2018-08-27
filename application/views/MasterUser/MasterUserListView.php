<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Master User</h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Beranda</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Master Data</a>
                  </li>
                  <li class="breadcrumb-item active">Master User
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
                <h4 class="card-title">Berikut ini adalah user yang telah terdaftar.</h4>
            </div>
            <div class="card-content collapse show">
                <div class="card-body border-top-blue-grey border-top-lighten-5 ">
                   	                <div class="card-content collpase show">
	                <div class="card-body card-dashboard">
	                <p class="card-text">At times you will wish to be able to create a table from dynamic information passed directly to DataTables, rather than having it read from the document. This is achieved using the <code>data option</code> in the initialization object, passing in an array of data to be used (like all other DataTables handled data, this can be arrays or objects using the <code>columns.data</code> option).
					</p>
	                <table class="table table-striped table-bordered tablemasteruserdetail">
					<thead>
                                    <tr>
										<th>Action</th>
                                        <th>Username</th>
                                        <th>Nama</th>
										<th>Alamat</th>
										<th>No. HP</th>
										<th>Email</th>
										<th>Level</th>
                                        <th>Status Aktif</th>
                                    </tr>
                                    </thead>


                                  <tbody>
										<?php
											foreach ($DataUsers as $value) {
													echo "<tr>";
													echo "<div>";
													echo "<td>";
													echo "<center><a href=\"" . base_url() . "masteruser/detail/". $value['Id'] . "\" class=\"waves-effect\"><i class=\"ft-eye \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"View\"></i> </a>&nbsp;&nbsp;";
													echo "<a href=\"" . base_url() . "masteruser/edit/". $value['Id'] . "\" class=\"waves-effect\"><i class=\"ft-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Edit\"></i> </a>&nbsp;&nbsp;";
													if ($this->session->userdata('iduser') != $value['Id']){
													echo "<a href=\"#\" class=\"waves-effect delete-user\" id=\"".$value['Username']."-".$this->session->userdata('iduser')."\"><i class=\"ft-trash-2 \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Delete\"></i> </a>";
													}
													echo "</center></div>";
													echo "</td>";
													echo "<td>" . $value['Username'] . "</td>";
													echo "<td>" . $value['Nama'] . "</td>";
													echo "<td>" . $value['Alamat'] . "</td>";
													echo "<td>" . $value['NoHP'] . "</td>";
													echo "<td>" . $value['Email'] . "</td>";
													echo "<td>" . $value['Level'] . "</td>";
													echo "<td>" . $value['StatusAktif'] . "</td>";
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
