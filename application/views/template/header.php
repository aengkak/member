<?php
if($this->session->userdata('status') != "login"){
			redirect(base_url('login'));
		}else {
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css');?>">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/font-awesome.min.css');?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/simple-line-icons.css');?>"/>
	   <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/datatables.bootstrap.min.css');?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/animate.min.css');?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/mediaelementplayer.css');?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/fullcalendar.min.css');?>"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/plugins/bootstrap-material-datetimepicker.css');?>"/>
	<link href="<?php echo base_url('asset/css/style.css');?>" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="<?php echo base_url('asset/img/logomi.png');?>">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>