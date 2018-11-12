  <body class="horizontal-layout horizontal-menu 2-columns   menu-expanded" data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- fixed-top-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item"><a class="navbar-brand" href="<?php echo base_url(); ?>">
              <h3 class="brand-text"><?php echo $this->config->item('app_name'); ?></h3></a></li>
          <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
        </ul>
      </div>
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="<?php echo base_url(); ?>assets/images/portrait/small/default-avatar.png" alt="avatar"></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="<?php echo base_url(); ?>assets/images/portrait/small/default-avatar.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?php echo ucfirst($this->session->userdata('username')); ?></span></span></a>
                    <div class="dropdown-divider"></div><center> Lv: <?php echo ucfirst($this->session->userdata('namalevel')); ?></center>
					<div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>changepassword"><i class="ft-user"></i> Changepassword</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url(); ?>authentication/logout"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <ul class="nav navbar-nav main-menu-navigation" id="main-menu-navigation" data-menu="menu-navigation">
          <li ><a class="dropdown-toggle nav-link" href="<?=base_url();?>"><i class="ft-home"></i><span>Beranda</span></a>
          </li>
          <li class="dropdown" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-layers"></i><span>Master Data</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="<?=base_url();?>masterkriteria" data-toggle="dropdown">Master Kriteria</a>
                </li>
                <li data-menu=""><a class="dropdown-item" href="<?=base_url();?>masteruser" data-toggle="dropdown">Master User</a>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-monitor"></i><span>Data</span></a>
            <ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="<?=base_url();?>data" data-toggle="dropdown">Input Data Peserta PKH</a>
                </li>
              </div>
            </ul>
          </li>
          <li class="dropdown" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-layout"></i><span>Laporan</span></a>
			<ul class="dropdown-menu">
              <div class="arrow_box">
                <li data-menu=""><a class="dropdown-item" href="<?=base_url();?>laporanspk" data-toggle="dropdown">SPK Perhitungan Topsis</a>
                <li data-menu=""><a class="dropdown-item" href="<?=base_url();?>laporanbantuan" data-toggle="dropdown">Laporan Penerima Bantuan</a>
				</li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </div>
