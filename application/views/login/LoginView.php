<body class="horizontal-layout horizontal-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="hover" data-menu="horizontal-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
        <div class="col-md-4 col-10 box-shadow-2 p-0">
				 <?php if($alert): ?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                           <?php echo $this->config->item('InvalidUserPw'); ?>
                                        </div>
                    <?php endif; ?>
            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <div class="card-header border-0">
                    <div class="text-center mb-1">
                            <img src="<?php echo base_url(); ?>assets/images/logo/logo.png" alt="Program Keluarga Harapan" style="width:200px;height:114px;">
                    </div>
                </div>
                <div class="card-content">
                   
                    <div class="card-body">
                        <form class="form-horizontal" method="post" onsubmit="return checkEmptyInput();" action="<?=base_url()?>Authentication/login/">
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="text" class="form-control round" name="username" id="username" placeholder="Username" required>
                                <div class="form-control-position">
                                    <i class="ft-user"></i>
                                </div>
                            </fieldset>
                            <fieldset class="form-group position-relative has-icon-left">
                                <input type="password" class="form-control round" name="password" id="password"  placeholder="Password" required>
                                <div class="form-control-position">
                                    <i class="ft-lock"></i>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                   
                                </div>
                            </div>                           
                            <div class="form-group text-center">
                                <button type="submit" class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Login</button>    
                            </div>
                           
                        </form>
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