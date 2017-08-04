 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="<?php echo base_url('index');?>" class="navbar-brand"> 
                 <b>Karunia</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search"> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo $this->session->userdata('username');?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url('asset/img/user.png');?>" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="<?php echo base_url('profile');?>"><span class="fa fa-user"></span> My Profile</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href="<?php echo base_url('logout');?>"><span class="fa fa-power-off "></span> Log out</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="ripple"><a href="<?php echo base_url('index');?>"><span class="fa fa-home fa"></span>Dashboard</a></li>
                    <?php if($this->session->userdata('level') == "staff"){ ?>
					<li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa fa-users"></span> Data
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo base_url('request');?>">Request</a></li>
                        <li><a href="<?php echo base_url('member');?>">View</a></li>
						<li><a href="<?php echo base_url('user');?>">User</a></li>
					  </ul>
                    </li>
					<?php } else { ?>
                    <li class="ripple"><a href="<?php echo base_url('partner');?>"><span class="icons icon-link"></span>Partner</a></li>
					<?php } ?>
				  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->