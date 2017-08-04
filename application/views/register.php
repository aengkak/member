<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>

  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">

  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/simple-line-icons.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/icheck/skins/flat/aero.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/select2.min.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/ionrangeslider/ion.rangeSlider.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/ionrangeslider/ion.rangeSlider.skinFlat.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/bootstrap-material-datetimepicker.css');?>"/>
  <link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body id="mimin" class="dashboard form-signin-wrapper">

      <div class="container">

        <form action="" method="post" class="form-signin">
          <div class="panel periodic-login ">
              <div class="panel-body text-center">
					<p class="atomic-mass">Karunia Travel</p>
                  <p class="element-name">Register</p>
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="username" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="nama" required>
                    <span class="bar"></span>
                    <label>Nama</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="identitas" required>
                    <span class="bar"></span>
                    <label>No Identitas</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="alamat" required>
                    <span class="bar"></span>
                    <label>Alamat</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="telp" required>
                    <span class="bar"></span>
                    <label>No Telp</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="hp" required>
                    <span class="bar"></span>
                    <label>No Hp</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="email" required>
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
				  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" id="datepicker" class="form-text"name="lahir" required>
                    <span class="bar"></span>
                    <label>Tgl Lahir</label>
                  </div>
                  <label class="pull-left">
                  
                  </label>
                  <input type="submit" class="btn col-md-12" value="Signup"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="login">| Signin</a>
                </div>
          </div>
        </form>

      </div>

      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url('asset/js/jquery.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/jquery.ui.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>

      <script src="<?php echo base_url('asset/js/plugins/moment.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/icheck.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/jquery.knob.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/ion.rangeSlider.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/bootstrap-material-datetimepicker.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/jquery.nicescroll.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/jquery.mask.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/select2.full.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/nouislider.min.js');?>"></script>
      <script src="<?php echo base_url('asset/js/plugins/jquery.validate.min.js');?>"></script>

      <!-- custom -->
      <script src="<?php echo base_url('asset/js/main.js');?>"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
	<script type="text/javascript">
$( "#datepicker" ).bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
</script>
     <!-- end: Javascript -->
   </body>
   </html>